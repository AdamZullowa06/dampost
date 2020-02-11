<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function product() {
        return $this->belongsTo(Product::class, "product_id");
    }
}
