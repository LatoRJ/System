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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('Customer_ID');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email')->unique();
            $table->string('Contact_Number');
            $table->string('Line_Address_1');
            $table->string('Line_Address_2')->nullable();
            $table->string('Barangay');
            $table->string('Municipality');
            $table->string('City');
            $table->string('Postal_Code');
            $table->string('User_Name');
            $table->string('Password');
            $table->enum('Role', ['admin', 'customer']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }

};
