<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProvinceFile = file_get_contents(base_path('/database/Province.json'));
        $data = json_decode($ProvinceFile, true);

        Province::insert($data);
    }
}
