<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->integer('rating_id')->unsigned();
            $table->foreign('rating_id')->references('rating_id')->on('ratings');
            $table->integer('year_version');
            $table->integer('screen');
            $table->string('description');
            $table->float('discount');
            $table->float('price');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
