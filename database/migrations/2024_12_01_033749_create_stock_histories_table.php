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
        Schema::create('stock_histories', function (Blueprint $table) {
            $table->id('Stock_ID');
            $table->unsignedBigInteger('Product_ID');
            $table->integer('Stock_Change');
            $table->enum('Action_Type', ['addition', 'deduction']);
            $table->timestamp('Action_Date');
            $table->timestamps();

            $table->foreign('Product_ID')->references('Product_ID')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_histories');
    }

};
