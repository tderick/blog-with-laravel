<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;
use App\Models\User;
use App\Models\Comment;
use App\Models\BlogCategory;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','content','post_date','post_update','status','slug','is_comment_authorize','excerpt','is_in_trash', 'user_id'
    ];


    public function feature_image()
    {
        return $this->hasOne(Image::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function post()
    {
        return $this->belongsTo(User::class);
    }

    public function BlogCategory()
    {
        return $this->belongToMany(BlogCategory::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
