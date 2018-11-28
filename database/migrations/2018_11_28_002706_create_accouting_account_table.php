<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateAccouting_accountTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('accouting_account', function(Blueprint $table)
    {
     $table->increments('id');
     $table->string('code'); 
     $table->string('name'); 
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
    Schema::drop('accouting_account');
  }

}
