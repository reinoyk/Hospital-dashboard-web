<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        // Make sure you provide valid department IDs for each doctor
        Doctor::create(['name' => 'Dr. Waqas Khan', 'department_id' => 1, 'rating' => 4.5]); // Assuming 1 is the ID for Cardiology
        Doctor::create(['name' => 'Dr. Leonardo Petrus', 'department_id' => 2, 'rating' => 4.7]); // Assuming 2 is the ID for Neurology
        Doctor::create(['name' => 'Dr. Kautsarrahman', 'department_id' => 3, 'rating' => 4.8]); // Assuming 3 is the ID for General Medicine
    }
}
