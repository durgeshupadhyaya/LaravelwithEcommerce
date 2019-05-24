<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function main_category()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
