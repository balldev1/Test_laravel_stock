<?php

namespace Database\Seeders;

use App\Models\StockMovementItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockMovementItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StockMovementItem::create([
        'stock_movement_id' => 1,
        'product_id' => 1,
        'to_location_id' => 1,
        'quantity' => 100,
        'unit' => 'pcs',
        'batch_no' => 'B001',
        'expiration_date' => '2026-01-01',
        'picked_algorithm' => 'fifo'
        ]);

        StockMovementItem::create([
        'stock_movement_id' => 1,
        'product_id' => 1,
        'to_location_id' => 1,
        'quantity' => 100,
        'unit' => 'pcs',
        'batch_no' => 'B001',
        'expiration_date' => '2026-01-01',
        'picked_algorithm' => 'fefo'
        ]);
    }
}
