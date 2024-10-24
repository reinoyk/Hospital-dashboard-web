<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::create(['name' => 'Cardiology']);
        Department::create(['name' => 'Neurology']);
        Department::create(['name' => 'General']);
    }
}
