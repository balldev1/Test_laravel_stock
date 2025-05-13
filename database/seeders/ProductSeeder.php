<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        'type' => 'temperature',
        'sku' => 'SKU001',
        'barcode' => '1111',
        'source' => 'Thailand',
        'production_date' => '2025-01-01',
        'expiration_date' => null,
        'supplier_id' => 1,
        'price' => 100.00
        ]);

        Product::create([
        'type' => 'expiration',
        'sku' => 'SKU002',
        'barcode' => '2222',
        'source' => 'Thailand',
        'production_date' => '2025-02-01',
        'expiration_date' => '2026-02-01',
        'supplier_id' => 2,
        'price' => 200
        ]);

        Product::create([
        'type' => 'dangerous',
        'sku' => 'SKU003',
        'barcode' => '3333',
        'source' => 'Thailand',
        'production_date' => '2025-03-01',
        'expiration_date' => null,
        'supplier_id' => 3,
        'price' => 300
        ]);
    }
}
