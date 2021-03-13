<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CrudModelCommand extends GeneratorCommand {

  protected $signature = 'crud:model
  {name : The name of the model.}
  {--table= : The name of the table.}
  {--fillable= : The names of the fillable columns.}
  {--relationships= : The relationships for the model}
  {--pk=id : The name of the primary key.}
  {--soft-deletes=no : Include soft deletes fields.}';

  protected $description = 'Create a new model.';
  protected $type = 'Model';

  protected function getStub() {
    return config('crudgenerator.custom_template')
    ? config('crudgenerator.path') . '/model.stub'
    : __DIR__ . '/../stubs/model.stub';
  }

  protected function getDefaultNamespace($rootNamespace) {
    return $rootNamespace;
  }

  protected function buildClass($name) {
    $stub = $this->files->get($this->getStub());
    $table = $this->option('table') ?: $this->argument('name');
    $fillable = $this->option('fillable');
    $primaryKey = $this->option('pk');
    $relationships = trim($this->option('relationships')) != '' ? explode(';', trim($this->option('relationships'))) : [];
    $softDeletes = $this->option('soft-deletes');

    $ret = $this->replaceNamespace($stub, $name)
    ->replaceTable($stub, $table)
    ->replaceFillable($stub, $fillable)
    ->replacePrimaryKey($stub, $primaryKey)
    ->replaceSoftDelete($stub, $softDeletes);

    foreach ($relationships as $rel) {
      $parts = explode('#', $rel);
      if (count($parts) != 3) {
        continue;
      }

      $args = explode('|', trim($parts[2]));
      $argsString = '';
      foreach ($args as $k => $v) {
        if (trim($v) == '') {
          continue;
        }

        $argsString .= "'" . trim($v) . "', ";
      }

      $argsString = substr($argsString, 0, -2); // remove last comma

      $ret->createRelationshipFunction($stub, trim($parts[0]), trim($parts[1]), $argsString);
    }

    $ret->replaceRelationshipPlaceholder($stub);

    return $ret->replaceClass($stub, $name);
  }

  protected function replaceTable(&$stub, $table) {
    $stub = str_replace('{{table}}', $table, $stub);
    return $this;
  }

  protected function replaceFillable(&$stub, $fillable) {
    $stub = str_replace('{{fillable}}', $fillable, $stub);
    return $this;
  }

  protected function replacePrimaryKey(&$stub, $primaryKey) {
    $stub = str_replace('{{primaryKey}}', $primaryKey, $stub);
    return $this;
  }

  protected function replaceSoftDelete(&$stub, $replaceSoftDelete) {
    if ($replaceSoftDelete == 'yes') {
      $stub = str_replace('{{softDeletes}}', "use SoftDeletes;\n    ", $stub);
      $stub = str_replace('{{useSoftDeletes}}', "use Illuminate\Database\Eloquent\SoftDeletes;\n", $stub);
    } else {
      $stub = str_replace('{{softDeletes}}', '', $stub);
      $stub = str_replace('{{useSoftDeletes}}', '', $stub);
    }

    return $this;
  }

  protected function createRelationshipFunction(&$stub, $relationshipName, $relationshipType, $argsString) {
    $tabIndent = '    ';
    $code = "public function " . $relationshipName . "()\n" . $tabIndent . "{\n" . $tabIndent . $tabIndent
      . "return \$this->" . $relationshipType . "(" . $argsString . ");"
      . "\n" . $tabIndent . "}";

      $str = '{{relationships}}';
      $stub = str_replace($str, $code . "\n" . $tabIndent . $str, $stub);

      return $this;
    }

    protected function replaceRelationshipPlaceholder(&$stub) {
      $stub = str_replace('{{relationships}}', '', $stub);
      return $this;
    }
  }
