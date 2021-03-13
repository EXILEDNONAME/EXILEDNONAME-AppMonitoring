<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class CrudStoreRequestCommand extends GeneratorCommand {

  protected $signature = 'crud:storerequest
  {name : The name of the controler.}
  {--crud-name= : The name of the Crud.}
  {--model-name= : The name of the Model.}
  {--model-namespace= : The namespace of the Model.}
  {--controller-namespace= : Namespace of the controller.}
  {--storerequest-namespace= : Namespace of the storerequest.}
  {--view-path= : The name of the view path.}
  {--fields= : Field names for the form & migration.}
  {--validations= : Validation rules for the fields.}
  {--route-group= : Prefix of the route group.}
  {--pagination=25 : The amount of models per page for index pages.}
  {--force : Overwrite already existing controller.}';

  protected $description = 'Create a new store request.';
  protected $type = 'Store Request';
  protected function getStub() {
    return config('crudgenerator.custom_template')
    ? config('crudgenerator.path') . '/store-request.stub'
    : __DIR__ . '/../stubs/controller.stub';
  }

  protected function getDefaultNamespace($rootNamespace) {
    return $rootNamespace . ($this->option('storerequest-namespace') ? $this->option('storerequest-namespace') :  $this->option('storerequest-namespace') );
  }

  protected function alreadyExists($rawName) {
    if ($this->option('force')) {
      return false;
    }
    return parent::alreadyExists($rawName);
  }

  protected function buildClass($name) {
    $stub = $this->files->get($this->getStub());
    $viewPath = $this->option('view-path') ? $this->option('view-path') . '.' : '';
    $crudName = strtolower($this->option('crud-name'));
    $crudNameSingular = Str::singular($crudName);
    $modelName = $this->option('model-name');

    // NEW
    $ControllerUrl = Str::snake($this->option('model-name'), '-');
    $ControllerPath = Str::singular(Str::snake($this->option('model-name'), '-'));
    $ControllerModel = Str::singular($this->option('model-name'));

    $modelNamespace = $this->option('model-namespace');
    $routeGroup = ($this->option('route-group')) ? $this->option('route-group') . '/' : '';
    $routePrefix = ($this->option('route-group')) ? $this->option('route-group') : '';
    $routePrefixCap = ucfirst($routePrefix);
    $perPage = intval($this->option('pagination'));
    $viewName = Str::snake($this->option('crud-name'), '-');
    $fields = $this->option('fields');
    $validations = rtrim($this->option('validations'), ';');

    $validationRules = '';
    if (trim($validations) != '') {
      $validationRules = "\$this->validate(\$request, [";
      $rules = explode(';', $validations);
      foreach ($rules as $v) {
        if (trim($v) == '') { continue; }
        $parts = explode('#', $v);
        $fieldName = trim($parts[0]);
        $rules = trim($parts[1]);
        $validationRules .= "\n\t\t\t'$fieldName' => '$rules',";
      }

      $validationRules = substr($validationRules, 0, -1);
      $validationRules .= "\n\t\t]);";
    }

    $fieldsArray = explode(';', $fields);
    $fileSnippet = '';
    $whereSnippet = '';

    if ($fields) {
      $x = 0;
      foreach ($fieldsArray as $index => $item) {
        $itemArray = explode('#', $item);

        if (trim($itemArray[1]) == 'file') {
          $fileSnippet .= str_replace('{{fieldName}}', trim($itemArray[0]), $snippet) . "\n";
        }

        $fieldName = trim($itemArray[0]);

        $whereSnippet .= ($index == 0) ? "where('$fieldName', 'LIKE', \"%\$keyword%\")" . "\n                " : "->orWhere('$fieldName', 'LIKE', \"%\$keyword%\")" . "\n                ";
      }

      $whereSnippet .= "->";
    }

    return $this->replaceNamespace($stub, $name)
    ->replaceViewPath($stub, $viewPath)
    ->replaceViewName($stub, $viewName)
    ->replaceCrudName($stub, $crudName)
    ->replaceCrudNameSingular($stub, $crudNameSingular)
    ->replaceModelName($stub, $modelName)
    ->replaceControllerUrl($stub, $ControllerUrl)
    ->replaceControllerPath($stub, $ControllerPath)
    ->replaceControllerModel($stub, $ControllerModel)
    ->replaceModelNamespace($stub, $modelNamespace)
    ->replaceModelNamespaceSegments($stub, $modelNamespace)
    ->replaceRouteGroup($stub, $routeGroup)
    ->replaceRoutePrefix($stub, $routePrefix)
    ->replaceRoutePrefixCap($stub, $routePrefixCap)
    ->replaceValidationRules($stub, $validationRules)
    ->replacePaginationNumber($stub, $perPage)
    ->replaceFileSnippet($stub, $fileSnippet)
    ->replaceWhereSnippet($stub, $whereSnippet)
    ->replaceClass($stub, $name);
  }

  protected function replaceViewName(&$stub, $viewName) {
    $stub = str_replace('{{viewName}}', $viewName, $stub);
    return $this;
  }

  protected function replaceViewPath(&$stub, $viewPath) {
    $stub = str_replace('{{viewPath}}', $viewPath, $stub);
    return $this;
  }

  protected function replaceCrudName(&$stub, $crudName) {
    $stub = str_replace('{{crudName}}', $crudName, $stub);
    return $this;
  }

  protected function replaceCrudNameSingular(&$stub, $crudNameSingular) {
    $stub = str_replace('{{crudNameSingular}}', $crudNameSingular, $stub);
    return $this;
  }

  protected function replaceModelName(&$stub, $modelName) {
    $stub = str_replace('{{modelName}}', $modelName, $stub);
    return $this;
  }

  protected function replaceControllerUrl(&$stub, $ControllerUrl) {
    $stub = str_replace('{{ControllerUrl}}', $ControllerUrl, $stub);
    return $this;
  }

  protected function replaceControllerPath(&$stub, $ControllerPath) {
    $stub = str_replace('{{ControllerPath}}', $ControllerPath, $stub);
    return $this;
  }

  protected function replaceControllerModel(&$stub, $ControllerModel) {
    $stub = str_replace('{{ControllerModel}}', $ControllerModel, $stub);
    return $this;
  }

  protected function replaceModelNamespace(&$stub, $modelNamespace) {
    $stub = str_replace('{{modelNamespace}}', $modelNamespace, $stub);
    return $this;
  }

  protected function replaceModelNamespaceSegments(&$stub, $modelNamespace) {
    $modelSegments = explode('\\', $modelNamespace);
    foreach ($modelSegments as $key => $segment) {
      $stub = str_replace('{{modelNamespace[' . $key . ']}}', $segment, $stub);
    }

    $stub = preg_replace('{{modelNamespace\[\d*\]}}', '', $stub);
    return $this;
  }

  protected function replaceRoutePrefix(&$stub, $routePrefix) {
    $stub = str_replace('{{routePrefix}}', $routePrefix, $stub);
    return $this;
  }

  protected function replaceRoutePrefixCap(&$stub, $routePrefixCap) {
    $stub = str_replace('{{routePrefixCap}}', $routePrefixCap, $stub);
    return $this;
  }

  protected function replaceRouteGroup(&$stub, $routeGroup) {
    $stub = str_replace('{{routeGroup}}', $routeGroup, $stub);
    return $this;
  }

  protected function replaceValidationRules(&$stub, $validationRules) {
    $stub = str_replace('{{validationRules}}', $validationRules, $stub);
    return $this;
  }

  protected function replacePaginationNumber(&$stub, $perPage) {
    $stub = str_replace('{{pagination}}', $perPage, $stub);
    return $this;
  }

  protected function replaceFileSnippet(&$stub, $fileSnippet) {
    $stub = str_replace('{{fileSnippet}}', $fileSnippet, $stub);
    return $this;
  }

  protected function replaceWhereSnippet(&$stub, $whereSnippet) {
    $stub = str_replace('{{whereSnippet}}', $whereSnippet, $stub);
    return $this;
  }
}
