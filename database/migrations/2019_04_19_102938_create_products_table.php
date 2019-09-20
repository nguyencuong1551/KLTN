<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name','255')->nullable();
            $table->String('image','255')->nullable();
            $table->String('image1','255')->nullable();
            $table->String('image2','255')->nullable();
            $table->String('image3','255')->nullable();
            $table->String('description')->nullable();
            $table->integer('unit_price')->nullable();
            $table->integer('promotion_price')->nullable();
            $table->integer('id_category')->nullable();
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
        Schema::dropIfExists('products');
    }
}
