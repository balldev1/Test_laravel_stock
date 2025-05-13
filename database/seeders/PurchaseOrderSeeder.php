<?php

namespace Database\Seeders;

use App\Models\PurchaseOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       PurchaseOrder::create([
       'supplier_id' => 1,
        'order_date' => '2025-05-01',
        'status' => 'approved',
        'notes' => 'สั่งสินค้าเข้าสต็อก',
        'created_by' => null
        ]);
    }
}
