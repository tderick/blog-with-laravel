<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','content','post_date','post_update','status','slug','is_comment_authorize','excerpt','is_in_trash'
    ];
}
