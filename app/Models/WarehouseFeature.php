<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WarehouseFeature extends Model
{
    protected $fillable = ['code', 'name', 'control_type', 'description'];
}
