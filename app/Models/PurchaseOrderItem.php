<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseOrderItem extends Model
{
      protected $fillable = [
        'purchase_order_id', 'product_id', 'ordered_quantity',
        'received_quantity', 'unit_price', 'expected_delivery_date'
    ];
}
