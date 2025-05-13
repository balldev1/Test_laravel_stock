<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone::create([
        'warehouse_id' => 1,
        'name' => 'โซนรับสินค้า',
        'type' => 'receiving'
        ]);

        Zone::create([
        'warehouse_id' => 1,
        'name' => 'โซนจัดเก็บ',
        'type' => 'storing'
        ]);

        Zone::create([
        'warehouse_id' => 1,
        'name' => 'โซนจัดส่ง',
        'type' => 'shipping'
        ]);

        Zone::create([
        'warehouse_id' => 1,
        'name' => 'โซนเสียหาย',
        'type' => 'damaged'
        ]);
    }
}
