<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','content','post_date','post_update','status','slug','is_comment_authorize','excerpt','is_in_trash'
    ];


    public function feature_image(){
        return $this->hasOne(Image::class);
    }
}
