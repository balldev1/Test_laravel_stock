<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZoneFeature extends Model
{
    protected $fillable = ['code', 'name', 'control_type', 'description'];
}
