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
                'name' => 'Jakarta, Indonesia',
                'description' => 'Ibu Kota Negara'
            ],
            [
                'name' => 'Bandung, Indonesia',
                'description' => 'Kota Kembang'
            ],
            [
                'name' => 'Surabaya, Indonesia',
                'description' => 'Kota Pahlawan'
            ],
            [
                'name' => 'Yogyakarta, Indonesia',
                'description' => 'Kota Pelajar'
            ],
            [
                'name' => 'Bali, Indonesia',
                'description' => 'Pulau Dewata'
            ],
        ]);
    }
}
