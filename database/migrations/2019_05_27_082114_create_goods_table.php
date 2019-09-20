<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name')->nullable();
            $table->integer('phone')->nullable();
            $table->String('address')->nullable();
            $table->string('email')->nullable();
            $table->String('payment')->nullable();
            $table->String('nameSP')->nullable();
            $table->integer('promotion_price')->nullable();
            $table->text('note')->nullable();
            $table->dateTime('time')->nullable();
            $table->integer('quantity')->nullable();
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
        Schema::dropIfExists('goods');
    }
}
