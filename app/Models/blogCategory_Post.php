<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogCategory_Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'post_id','blog_id'
    ];
}
