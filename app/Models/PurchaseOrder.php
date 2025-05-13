<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseOrder extends Model
{
    protected $fillable = ['supplier_id', 'order_date', 'status', 'notes', 'created_by'];

    public function items()
    {
        return $this->hasMany(PurchaseOrderItem::class);
    }
}
