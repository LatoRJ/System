<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('Cart_ID');
            $table->unsignedBigInteger('Customer_ID')->nullable();
            $table->unsignedBigInteger('Product_ID');
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign('Customer_ID')->references('Customer_ID')->on('customers')->onDelete('set null');
            $table->foreign('Product_ID')->references('Product_ID')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }

};
