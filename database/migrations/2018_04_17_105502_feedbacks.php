<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feedbacks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function ($table){
            $table->increments('id_feedback');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->integer('stars');
            $table->string('reviewer');
            $table->string('tel');
            $table->text('review');
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
        Schema::drop('feedbacks');
    }
}
