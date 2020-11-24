<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartvalidated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartvalidated', function (Blueprint $table){
            $table->id();
            $table->integer('total');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('cartvalidated', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('user');
            $table->foreignId('cart_id')->references('id')->on('cart');
            $table->foreignId('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartvalidated', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['cart_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('cartvalidated');
    }
}
