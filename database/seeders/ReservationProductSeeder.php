<?php

namespace Database\Seeders;

use App\Models\ReservationProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    ReservationProduct::create([
            'product_id' => 1,
            'warehouse_id' => 1,
            'location_id' => 1,
            'order_id' => 1,
            'reserved_quantity' => 10,
            'priority_level' => 'normal',
            'reserved_until' => '2025-05-15',
            'status' => 'active'
        ]);
    }
}
