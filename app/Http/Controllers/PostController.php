<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.admin.new_post');
    }

    public function savePost(Request $request)
    {
        $request = $request->validate();
    }

    public function detail(){
        return view('pages.frontend.blog.blog-single');
    }

}
