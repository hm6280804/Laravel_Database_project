<?php

namespace Database\Seeders;

use App\Models\lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class lecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path : 'database/json/lecturers.json');
        $lecturers = collect(json_decode($json));
        $lecturers->each(function($lecturer){
            lecturer::create([
                'name' => $lecturer->name,
                'city' => $lecturer->city
            ]);
        });
    }
}
