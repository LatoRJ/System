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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('Payment_ID');
            $table->unsignedBigInteger('Order_ID');
            $table->string('Payment_Method');
            $table->decimal('Amount', 10, 2);
            $table->timestamp('Payment_Date');
            $table->timestamps();

            $table->foreign('Order_ID')->references('Order_ID')->on('orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }

};
