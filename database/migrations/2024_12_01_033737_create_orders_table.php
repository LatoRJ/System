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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('Order_ID');
            $table->unsignedBigInteger('Customer_ID');
            $table->unsignedBigInteger('Cart_ID');
            $table->decimal('Total_Amount', 10, 2);
            $table->enum('Order_Status', ['pending', 'completed', 'canceled']);
            $table->timestamps();

            $table->foreign('Customer_ID')->references('Customer_ID')->on('customers')->onDelete('cascade');
            $table->foreign('Cart_ID')->references('Cart_ID')->on('carts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }

};