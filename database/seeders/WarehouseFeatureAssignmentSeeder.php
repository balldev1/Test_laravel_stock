<?php

namespace Database\Seeders;

use App\Models\WarehouseFeatureAssignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseFeatureAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WarehouseFeatureAssignment::create([
        'warehouse_id' => 1,
        'feature_id' => 1,
        'value' => null
        ]);

         WarehouseFeatureAssignment::create([
        'warehouse_id' => 2,
        'feature_id' => 2,
        'value' => null
        ]);

         WarehouseFeatureAssignment::create([
        'warehouse_id' => 3,
        'feature_id' => 3,
        'value' => null
        ]);

         WarehouseFeatureAssignment::create([
        'warehouse_id' => 3,
        'feature_id' => 4,
        'value' => null
        ]);
    }
}
