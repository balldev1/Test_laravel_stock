<?php

namespace Database\Seeders;

use App\Models\WarehouseFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    WarehouseFeature::create([
    'code' => 'normal',
    'name' => 'สินค้าปกติ:',
    'control_type' => 'environment',
    'description' => null
    ]);

    WarehouseFeature::create([
    'code' => 'temperature',
    'name' => 'สินค้าควบคุมอุณหภูมิ',
    'control_type' => 'environment',
    'description' => null
    ]);

    WarehouseFeature::create([
    'code' => 'expiration',
    'name' => 'สินค้ามีวันหมดอายุ',
    'control_type' => 'environment',
    'description' => null
    ]);

    WarehouseFeature::create([
    'code' => 'dangerous',
    'name' => 'สินค้าอันตราย',
    'control_type' => 'safety',
    'description' => null
    ]);
    }
}
