<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WarehouseFeatureAssignment extends Model
{
    protected $fillable = ['warehouse_id', 'feature_id', 'value'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function feature()
    {
        return $this->belongsTo(WarehouseFeature::class);
    }
}
