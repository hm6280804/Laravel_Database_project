<?php

namespace Database\Seeders;

use App\Models\farmer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class farmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/farmers.json');
        $farmers = collect(json_decode($json));

        $farmers->each(function($farmer){
            farmer::create([
                'name' => $farmer->name,
                'email' => $farmer->email,
                'age'  => $farmer->age,
                'city' => $farmer->city
            ]);
        });

    }
}

