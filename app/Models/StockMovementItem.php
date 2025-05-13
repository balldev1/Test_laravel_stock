<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockMovementItem extends Model
{
    protected $fillable = [
        'stock_movement_id', 'product_id', 'from_location_id', 'to_location_id',
        'quantity', 'unit', 'batch_no', 'expiration_date', 'picked_algorithm'
    ];

    public function movement()
    {
        return $this->belongsTo(StockMovement::class);
    }
}
