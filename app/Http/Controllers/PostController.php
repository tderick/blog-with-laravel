<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.admin.posts.new_post');
    }

    public function createPost(Request $request)
    {
        $request->validate(
            [
                "title" => "required",
                "content" => "required"
            ]
        );

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['title']);


        $post = Post::create($requestData);

        return redirect('/admin/update-post/' . $post->slug . '/');
    }

    public function editPostForm($slug)
    {
        $post = Post::whereSlug($slug)->first();


        if ($post == null) {
            abort(404, 'Page not found');
        } else {
            return view('pages.admin.posts.update_post', compact('post'));
        }
    }

    public function save(Request $request, $slug)
    {
        $request->validate(
            [
                "title" => "required",
                "content" => "required"
            ]
        );

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['title']);

        $post = Post::whereSlug($slug)->first();
        $post->update($requestData);

        return redirect('/admin/update-post/' . $post->slug . '/');
    }
}
