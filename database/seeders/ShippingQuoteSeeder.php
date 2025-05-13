<?php

namespace Database\Seeders;

use App\Models\ShippingQuote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingQuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    ShippingQuote::create([
    'sales_order_id' => 1,
    'provider_id' => 1,
    'calculated_cost' => 100,
    'delivery_eta' => '2025-05-12',
    'is_selected' => true,
    'calculation_details' => json_encode(['weight' => 5, 'distance_km' => 30])
    ]);
    }
}
