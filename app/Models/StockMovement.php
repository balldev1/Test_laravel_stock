<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockMovement extends Model
{
    protected $fillable = [
        'movement_type', 'source_warehouse_id', 'destination_warehouse_id',
        'note', 'reference_type', 'reference_id', 'created_by'
    ];

    public function items()
    {
        return $this->hasMany(StockMovementItem::class);
    }
}
