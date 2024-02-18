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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('patient_type');
            $table->string('treatment_type');
            $table->string('email');
            $table->string('password')->nullable(true);
            $table->string('dob');
            $table->string('phone');
            $table->string('gender');
            $table->string('address');
            $table->string('doctor_id');
            $table->string('appointment_date');
            $table->string('description')->default(' ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
