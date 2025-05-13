<?php

namespace Database\Seeders;

use App\Models\SalesOrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesOrderItemSeeder extends Seeder
{
    public function run(): void
    {
    SalesOrderItem::create([
    'sales_order_id' => 1,
    'product_id' => 1,
    'ordered_quantity' => 10,
    'allocated_quantity' => 10,
    'unit_price' => 120,
    'reserved_until' => '2025-05-15'
    ]);
    }
}
