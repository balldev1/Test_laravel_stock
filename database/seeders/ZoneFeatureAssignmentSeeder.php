<?php

namespace Database\Seeders;

use App\Models\ZoneFeatureAssignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneFeatureAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZoneFeatureAssignment::create([
        'zone_id' => 2,
        'feature_id' => 1,
        'value' => null
        ]);
        
        ZoneFeatureAssignment::create([
        'zone_id' => 2,
        'feature_id' => 2,
        'value' => null
        ]);

        ZoneFeatureAssignment::create([
        'zone_id' => 2,
        'feature_id' => 3,
        'value' => null
        ]);

        ZoneFeatureAssignment::create([
        'zone_id' => 2,
        'feature_id' => 4,
        'value' => null
        ]);
    }
}
