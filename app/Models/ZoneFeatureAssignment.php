<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZoneFeatureAssignment extends Model
{
    protected $fillable = ['zone_id', 'feature_id', 'value'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function feature()
    {
        return $this->belongsTo(ZoneFeature::class);
    }
}
