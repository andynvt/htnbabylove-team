<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail',function($table){
            $table->increments('id_bill_detail');
            $table->integer('id_bill')->unsigned();
            $table->foreign('id_bill')->references('id_bill')->on('bills');
            $table->integer('id_detail')->unsigned();
            $table->foreign('id_detail')->references('id_detail')->on('product_detail');
            $table->integer('quantity');
            $table->integer('unit_price');
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
