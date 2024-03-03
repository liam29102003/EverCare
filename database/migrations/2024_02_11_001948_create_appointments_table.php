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
            $table->string('patient_type');
            $table->string('treatment_type');
           $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->string('appointment_day');
            $table->string('appointment_date');
            $table->string('description')->default(' ');
            $table->string('status')->default('pending');
            $table->longText('symptoms')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('price')->nullable(true);
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
