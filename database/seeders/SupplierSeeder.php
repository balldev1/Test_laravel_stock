<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
        'name' => 'ABC Supplier Ltd.',
        'contact_name' => 'Mr. Somchai',
        'phone' => '0812345678',
        'email' => 'contact@abc.com',
        'address' => '789 Supply Street, BKK'
        ]);

        Supplier::create([
        'name' => 'test Supplier Ltd.',
        'contact_name' => 'Mr. 8888',
        'phone' => '08888888',
        'email' => 'contact@abc.com',
        'address' => '8888 Supply Street, BKK'
        ]);

        Supplier::create([
        'name' => '11111 Supplier Ltd.',
        'contact_name' => 'Mr. 1111',
        'phone' => '01111',
        'email' => 'contact@abc.com',
        'address' => '1111 Supply Street, BKK'
        ]);
    }
}
