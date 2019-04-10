<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('shipping_address');
            $table->string('price');
            $table->integer('created_userid')->nullable();
            $table->integer('updated_userid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->integer('created_userid')->nullable();
            $table->integer('updated_userid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');        
    }
}
