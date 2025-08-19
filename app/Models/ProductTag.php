<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'color',
        'description',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_product_tag', 'product_tag_id', 'product_id');
    }
}
