<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function ($table){
            $table->increments('id_product');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id_type')->on('product_type');
            $table->string('name');
            $table->integer('unit_price');
            $table->integer('promotion_price');
            $table->string('size');
            $table->text('description');
            $table->integer('status');
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
        Schema::drop('products');
    }
}
