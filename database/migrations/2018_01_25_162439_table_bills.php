<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills',function($table){
            $table->increments('id_bill');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->integer('total_price');
            $table->integer('total_product');
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
        Schema::drop('bills');
    }
}
