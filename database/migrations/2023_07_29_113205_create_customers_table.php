<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');  // id of the customer
            $table->string('name', 60);
            $table->string('email', 100);
            $table->enum('gender', ["Male", "Female", "Other"]);
            $table->text('address');
            $table->date('dob');
            $table->string('password'); // kono limit na dile 256 characters 
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
