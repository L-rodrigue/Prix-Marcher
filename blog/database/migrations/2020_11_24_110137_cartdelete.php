<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartdelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartdelete', function (Blueprint $table){
            $table->id();
            $table->timestamps();
        });
        Schema::table('cartdelete', function (Blueprint $table) {
            $table->foreignId('cart_id')->references('id')->on('cart');
            $table->foreignId('product_id')->references('id')->on('product');
            $table->foreignId('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartdelete', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('cartdelete');
    }
}
