<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'published_at',
        'is_published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

