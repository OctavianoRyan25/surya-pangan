<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'title',
        'slug',
        'body',
        'thumbnail',
        'category_id',
        'author_id',
        'is_published',
        'published_at',
    ];

    // Add description feom body

    protected $appends = ['description'];

    public function getDescriptionAttribute()
    {
        return substr(strip_tags($this->body), 0, 150) . '...';
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags()
    {
        return $this->belongsToMany(PostTag::class, 'post_post_tag', 'post_id', 'post_tag_id');
    }
}
