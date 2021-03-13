<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummiesTable extends Migration {

  public function up() {
    Schema::create('dummies', function (Blueprint $table) {
      $table->increments('id');
      $table->string('date_start');
      $table->string('date_end');
      $table->string('name');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('dummies');
  }

}
