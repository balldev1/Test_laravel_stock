<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse extends Model
{
    protected $fillable = ['code', 'name', 'address', 'type'];

    public function featureAssignments()
    {
        return $this->hasMany(WarehouseFeatureAssignment::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
