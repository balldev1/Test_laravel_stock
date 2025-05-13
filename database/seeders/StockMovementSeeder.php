<?php

namespace Database\Seeders;

use App\Models\StockMovement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StockMovement::create([
        'movement_type' => 'inbound',
        'destination_warehouse_id' => 1,
        'note' => null,
        'reference_type' => 'purchase_order',
        'reference_id' => null,
        'created_by' => null
        ]);

         StockMovement::create([
        'movement_type' => 'outbound',
        'destination_warehouse_id' => 1,
        'note' => null,
        'reference_type' => 'purchase_order',
        'reference_id' => null,
        'created_by' => null
        ]);

         StockMovement::create([
        'movement_type' => 'internal_transfer',
        'destination_warehouse_id' => 1,
        'note' => null,
        'reference_type' => 'purchase_order',
        'reference_id' => null,
        'created_by' => null
        ]);
    }
}
