<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable = [
        'type', 'sku', 'barcode', 'source', 'production_date',
        'expiration_date', 'supplier_id', 'price'
    ];

    public function suppliers()
    {
        return $this->hasMany(ProductSupplierAssignment::class);
    }

      public function locationProducts()
    {
        return $this->hasMany(LocationProduct::class);
    }
}
