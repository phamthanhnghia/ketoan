<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function(Blueprint $table)
    {
     $table->increments('id');
     $table->string('user_code'); 
     $table->string('name'); 
     $table->string('address'); 
     $table->string('phone'); 
     $table->string('PID'); 
     $table->string('tax_code'); 
     $table->string('blank_account_number'); 
     $table->string('blank_account_name'); 
     $table->string('password'); 
     $table->string('username'); 
     $table->string('role'); 
     $table->enum('status', ['0', '1']);
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
    Schema::drop('users');
  }

}