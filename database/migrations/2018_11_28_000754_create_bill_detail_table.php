<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateBill_detailTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bill_detail', function(Blueprint $table)
    {
     $table->increments('id');
     $table->string('bill_id'); 
     $table->string('acc_id'); 
     $table->string('released_date'); 
     $table->string('invoice_number'); 
     $table->string('invoice_type'); 
     $table->string('total'); 
     $table->string('exchange_rate'); 
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
    Schema::drop('bill_detail');
  }

}