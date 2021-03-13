<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration {

  public function up() {
    Schema::create('monitorings', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('ip_address');
      $table->string('mac_address')->nullable();
      $table->integer('port')->nullable()->default(80);
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
