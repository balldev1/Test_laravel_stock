<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
   protected $fillable = ['zone_id', 'name', 'max_weight', 'max_volume', 'allowed_types'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function products()
    {
        return $this->hasMany(LocationProduct::class);
    }
}
