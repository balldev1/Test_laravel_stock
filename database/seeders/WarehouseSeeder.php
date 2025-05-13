<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
    Warehouse::create([
        'name' => 'Main Warehouse',
        'code' => 'WH-MAIN',
        'address' => '123 Sukhumvit Rd, Bangkok',
        'type' => 'main',
    ]);

    Warehouse::create([
        'name' => 'Sub Warehouse',
        'code' => 'WH-SUB',
        'address' => '456 Chiang Mai Rd, Chiang Mai',
        'type' => 'sub',
    ]);

    Warehouse::create([
        'name' => 'temporary Warehouse',
        'code' => 'WH-SEC',
        'address' => '456 test Rd, test',
        'type' => 'temporary',
    ]);
    }
}
