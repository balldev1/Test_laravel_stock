<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            WarehouseSeeder::class,
            WarehouseFeatureSeeder::class,
            WarehouseFeatureAssignmentSeeder::class,
            ZoneSeeder::class,
            ZoneFeatureSeeder::class,
            ZoneFeatureAssignmentSeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            ProductSupplierAssignmentSeeder::class,
            LocationSeeder::class,
            LocationProductSeeder::class,
            StockMovementSeeder::class,
            StockMovementItemSeeder::class,
            PurchaseOrderSeeder::class,
            PurchaseOrderItemSeeder::class,
            CustomerSeeder::class,
            SalesOrderSeeder::class,
            SalesOrderItemSeeder::class,
            ReservationProductSeeder::class,
            ShippingProviderSeeder::class,
            ShippingQuoteSeeder::class,
        ]);
    }
}
