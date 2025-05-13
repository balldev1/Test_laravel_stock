<?php

namespace Database\Seeders;

use App\Models\ProductSupplierAssignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSupplierAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSupplierAssignment::create([
        'product_id' => 1,
        'supplier_id' => 1,
        'preferred' => true,
        'price' => 90
    ]);

    ProductSupplierAssignment::create([
        'product_id' => 2,
        'supplier_id' => 2,
        'preferred' => true,
        'price' => 80
    ]);

    ProductSupplierAssignment::create([
        'product_id' => 3,
        'supplier_id' => 3,
        'preferred' => true,
        'price' => 70
    ]);
    }
}
