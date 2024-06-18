<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::insert([
            [
                'name' => 'Jakarta',
                'description' => 'Ibu Kota Negara'
            ],
            [
                'name' => 'Bandung',
                'description' => 'Kota Kembang'
            ],
            [
                'name' => 'Surabaya',
                'description' => 'Kota Pahlawan'
            ],
            [
                'name' => 'Yogyakarta',
                'description' => 'Kota Pelajar'
            ],
            [
                'name' => 'Bali',
                'description' => 'Pulau Dewata'
            ],
        ]);
    }
}
