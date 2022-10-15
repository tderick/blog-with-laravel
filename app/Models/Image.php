<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', 'post_id'
    ];

    public function feature_image()
    {
        return $this->belongTo(Post::class);
    }
}
