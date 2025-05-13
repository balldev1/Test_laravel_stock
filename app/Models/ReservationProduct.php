<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReservationProduct extends Model
{
    protected $table = 'reservation_product';
    
    protected $fillable = [
        'product_id', 'warehouse_id', 'location_id', 'order_id',
        'reserved_quantity', 'priority_level', 'reserved_until', 'status'
    ];
}
