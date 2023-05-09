<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CityFile = file_get_contents(base_path('/database/City.json'));
        $RegencyFile = file_get_contents(base_path('/database/Regency.json'));
        
        $CityData = json_decode($CityFile, true);
        $RegencyData = json_decode($RegencyFile, true);

        City::insert($CityData);
        City::insert($RegencyData);
    }
}
