<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::insert([
            [
                'name'  => 'Taman Nasional Bromo Tengger Semeru',
                'price' => 1000000,
                'location_id' => 1
            ],
            [
                'name'  => 'Pantai Kuta',
                'price' => 500000,
                'location_id' => 5
            ],
            [
                'name'  => 'Pantai Sanur',
                'price' => 400000,
                'location_id' => 5
            ],
            [
                'name'  => 'Pantai Lovina',
                'price' => 300000,
                'location_id' => 5
            ],
            [
                'name'  => 'Pantai Pandawa',
                'price' => 200000,
                'location_id' => 5
            ],
        ]);
    }
}
