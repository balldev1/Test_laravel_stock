<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingProvider extends Model
{
    protected $fillable = [
        'name', 'contact_info', 'base_rate', 'rate_per_kg',
        'rate_per_volume', 'express_surcharge', 'area_coverage'
    ];
}
