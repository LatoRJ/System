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
        Schema::create('products', function (Blueprint $table) {
            $table->id('Product_ID');
            $table->string('Product_Name');
            $table->decimal('Price', 10, 2);
            $table->integer('Product_Quantity');
            $table->text('Product_Description')->nullable();
            $table->unsignedBigInteger('Category_ID');
            $table->timestamps();

            $table->foreign('Category_ID')->references('Category_ID')->on('categories')->onDelete('cascade');
        });
    }

public function down()
    {
        Schema::dropIfExists('products');
    }

};
