<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','comment','comment_at','is_approuve','is_in_trash','post_id'
    ];

    public function comments(){

        return $this->belongsTo(Post::class);
    }

}
