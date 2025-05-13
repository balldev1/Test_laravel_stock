<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingQuote extends Model
{
    protected $fillable = [
        'sales_order_id', 'provider_id', 'calculated_cost',
        'delivery_eta', 'is_selected', 'calculation_details'
    ];
}
