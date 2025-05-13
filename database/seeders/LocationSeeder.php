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
        Location::create([
        'zone_id' => 1,
        'name' => 'ชั้น A1',
        'max_weight' => null,
        'max_volume' => null,
        'allowed_types' => null
        ]);

        Location::create([
        'zone_id' => 1,
        'name' => 'ชั้น A2',
        'max_weight' => null,
        'max_volume' => null,
        'allowed_types' => null
        ]);

        Location::create([
        'zone_id' => 1,
        'name' => 'ชั้น A3',
        'max_weight' => null,
        'max_volume' => null,
        'allowed_types' => null
        ]);
    }
}
