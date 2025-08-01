<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class, 'product_product_tag', 'product_id', 'product_tag_id');
    }
}
