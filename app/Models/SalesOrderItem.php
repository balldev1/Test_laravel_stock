<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesOrderItem extends Model
{
   protected $fillable = [
        'sales_order_id', 'product_id', 'ordered_quantity',
        'allocated_quantity', 'unit_price', 'reserved_until'
    ];
}
