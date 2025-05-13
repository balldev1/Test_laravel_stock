<?php

namespace Database\Seeders;

use App\Models\ZoneFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZoneFeature::create([
        'code' => 'normal',
        'name' => 'สินค้าปกติ',
        'control_type' => 'environment',
        'description' => null
        ]);

        ZoneFeature::create([
        'code' => 'temperature',
        'name' => 'สินค้าควบคุมอุณหภูมิ',
        'control_type' => 'environment',
        'description' => null
        ]);

        ZoneFeature::create([
        'code' => 'expiration',
        'name' => 'สินค้ามีวันหมดอายุ',
        'control_type' => 'environment',
        'description' => null
        ]);

        ZoneFeature::create([
        'code' => 'dangerous',
        'name' => 'สินค้าอันตราย',
        'control_type' => 'safety',
        'description' => null
        ]);
    }
}
