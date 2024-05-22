<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            farmerSeeder::class,
         //   citySeeder::class,
            studentSeeder::class,
            lecturerSeeder::class
        ]);
        
        Employee::factory()->count(15)->create();
        
    }
}
