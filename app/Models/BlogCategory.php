<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','slug'
    ];

    public function Post(){
        return $this->belongToMany(Post::class);
    }
}