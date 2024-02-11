<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MedicalRecord;
use App\Models\Staff;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\Prescription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Staff::factory(20)->create();
        // Patient::factory(5)->create();
        // \App\Models\Admin::factory()->create();
        // \App\Models\Receptionist::factory()->create();
        // Prescription::factory(5)->create();
        Pharmacy::factory(10)->create();
        // MedicalRecord::factory(5)->create();
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
