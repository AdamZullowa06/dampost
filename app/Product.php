<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, "currency_id");
    }
}
