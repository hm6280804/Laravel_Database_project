<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/cities.json');
        $cities = collect(json_decode($json));
        $cities->each(function($city){
            city::create([
                "id" => $city->id,
                "city_name" => $city->city_name
            ]);
        });
    }
}
