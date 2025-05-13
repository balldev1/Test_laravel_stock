<?php

namespace Database\Seeders;

use App\Models\LocationProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    LocationProduct::create([
    'location_id' => 1,
    'product_id' => 1,
    'quantity' => 300,
    'unit' => 'pcs',
    'batch_no' => 'B001',
    'expiration_date' => null
    ]);

    LocationProduct::create([
    'location_id' => 2,
    'product_id' => 2,
    'quantity' => 200,
    'unit' => 'pcs',
    'batch_no' => 'B002',
    'expiration_date' => null
    ]);

    LocationProduct::create([
    'location_id' => 3,
    'product_id' => 3,
    'quantity' => 100,
    'unit' => 'pcs',
    'batch_no' => 'B003',
    'expiration_date' => null
    ]);
    }
}
