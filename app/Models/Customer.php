<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    protected $fillable = [
        'name', 'contact_name', 'phone', 'email', 'billing_address',
        'shipping_address', 'customer_type', 'tax_id',
        'priority_level', 'default_shipping_urgency', 'notes'
    ];
}
