<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LocationProduct extends Model
{
   protected $fillable = ['location_id', 'product_id', 'quantity', 'unit', 'batch_no', 'expiration_date'];


    public $timestamps = false;
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
