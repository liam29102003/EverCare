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
           $table->string('patient_id');
            $table->string('doctor_id');
            $table->string('appointment_day');
            $table->string('appointment_date');
            $table->string('description')->default(' ');
            $table->string('status')->default('pending');
            $table->longText('symptoms');
            $table->string('image')->nullable(true);
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
