<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateBillTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bill', function(Blueprint $table)
    {
     $table->increments('id');
     $table->string('bill_type'); 
     $table->string('user_id'); 
     $table->string('reason_note'); 
     $table->string('original_docs'); 
     $table->string('wh_id'); 
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
    Schema::drop('bill');
  }

}