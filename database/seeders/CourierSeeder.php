<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courier::insert([
            [
                'code' => 'JNE',
                'title' => 'Jalur Nugraha Ekakurir'
            ],
            [
                'code' => 'POS',
                'title' => 'Pos Indonesia'
            ],
            [
                'code' => 'TIKI',
                'title' => 'Citra Van Titipan Kilat'
            ]
        ]);
    }
}
