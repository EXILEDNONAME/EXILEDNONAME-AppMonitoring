<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_access')->unsigned();
        $table->string('photo_profile')->nullable();
        $table->string('name');
        $table->string('username')->unique();
        $table->string('phone')->unique();
        $table->string('email')->unique();
        $table->string('api_token', 80)->unique()->nullable()->default(null);
        $table->text('address_1')->nullable();
        $table->text('address_2')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->integer('active')->default(1);
        $table->integer('status')->default(1);
        $table->rememberToken();
        $table->foreign('id_access')->references('id')->on('accesses')->onDelete('restrict')->onUpdate('restrict');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
