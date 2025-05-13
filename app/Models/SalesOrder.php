<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalesOrder extends Model
{
   protected $fillable = [
        'customer_id', 'channel', 'priority_level', 'status', 'order_date',
        'shipping_address', 'shipping_method', 'created_by'
    ];

    public function items()
    {
        return $this->hasMany(SalesOrderItem::class);
    }
}
