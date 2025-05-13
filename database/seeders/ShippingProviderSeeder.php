<?php

namespace Database\Seeders;

use App\Models\ShippingProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     ShippingProvider::create([
    'name' => 'FastExpress',
    'contact_info' => 'fast@express.com',
    'base_rate' => 50,
    'rate_per_kg' => 10,
    'rate_per_volume' => 5,
    'express_surcharge' => 20,
    'area_coverage' => 'ทั่วประเทศ'
]);
    }
}
