<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsTags extends Model
{
    use HasFactory;

    protected $table = "posts_tags";

    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
