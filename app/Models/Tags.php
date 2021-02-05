<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags', 'tag_id', 'post_id')->withTimestamps();
    }
}
