<?php

namespace Database\Seeders;

use App\Models\PurchaseOrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseOrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PurchaseOrderItem::create([
        'purchase_order_id' => 1,
        'product_id' => 1,
        'ordered_quantity' => 100,
        'received_quantity' => 100,
        'unit_price' => 90,
        'expected_delivery_date' => '2025-05-05'
    ]);
    }
}
