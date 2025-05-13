<?php

namespace Database\Seeders;

use App\Models\SalesOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalesOrder::create([
    'customer_id' => 1,
    'channel' => 'online',
    'priority_level' => 'normal',
    'status' => 'pending',
    'order_date' => '2025-05-10',
    'shipping_address' => '456 ถนนย่อย กรุงเทพ',
    'shipping_method' => 'standard',
    'created_by' => 1
]);

    }
}
