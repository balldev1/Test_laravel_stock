<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    protected $fillable = ['warehouse_id', 'name', 'type'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function featureAssignments()
    {
        return $this->hasMany(ZoneFeatureAssignment::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
