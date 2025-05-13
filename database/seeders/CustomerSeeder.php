<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Customer::create([
    'name' => 'บริษัท ลูกค้า จำกัด',
    'contact_name' => 'คุณมานพ',
    'phone' => '0899999999',
    'email' => 'customer@example.com',
    'billing_address' => '123 ถนนหลัก กรุงเทพ',
    'shipping_address' => '456 ถนนย่อย กรุงเทพ',
    'customer_type' => 'company',
    'tax_id' => '0105556667778',
    'priority_level' => 'low',
    'default_shipping_urgency' => 'normal',
    'notes' => 'ลูกค้าประจำ'
    ]);

    Customer::create([
    'name' => 'บริษัท ลูกค้า จำกัด',
    'contact_name' => 'คุณมานพ',
    'phone' => '0899999999',
    'email' => 'customer@example.com',
    'billing_address' => '123 ถนนหลัก กรุงเทพ',
    'shipping_address' => '456 ถนนย่อย กรุงเทพ',
    'customer_type' => 'company',
    'tax_id' => '0105556667778',
    'priority_level' => 'normal',
    'default_shipping_urgency' => 'normal',
    'notes' => 'ลูกค้าประจำ'
    ]);

    Customer::create([
    'name' => 'บริษัท ลูกค้า จำกัด',
    'contact_name' => 'คุณมานพ',
    'phone' => '0899999999',
    'email' => 'customer@example.com',
    'billing_address' => '123 ถนนหลัก กรุงเทพ',
    'shipping_address' => '456 ถนนย่อย กรุงเทพ',
    'customer_type' => 'company',
    'tax_id' => '0105556667778',
    'priority_level' => 'high',
    'default_shipping_urgency' => 'normal',
    'notes' => 'ลูกค้าประจำ'
    ]);

    Customer::create([
    'name' => 'บริษัท ลูกค้า จำกัด',
    'contact_name' => 'คุณมานพ',
    'phone' => '0899999999',
    'email' => 'customer@example.com',
    'billing_address' => '123 ถนนหลัก กรุงเทพ',
    'shipping_address' => '456 ถนนย่อย กรุงเทพ',
    'customer_type' => 'company',
    'tax_id' => '0105556667778',
    'priority_level' => 'vip',
    'default_shipping_urgency' => 'normal',
    'notes' => 'ลูกค้าประจำ'
    ]);
    }
}
