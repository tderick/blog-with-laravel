<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Image;

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
        $post = Post::whereSlug($slug)->with('feature_image')->first();


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

        $post = Post::whereSlug($slug)->with('feature_image')->first();
        $post->update($requestData);

        return redirect('/admin/update-post/' . $post->slug . '/');
    }

    public function featureImage(Request $request, $slug)
    {
        $post = Post::whereSlug($slug)->with('feature_image')->first();


        if ($request->file('image')) {

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('featuresImages'), $filename);

            if ($post->feature_image) {
                $featureImage = $post->feature_image;
                $featureImage->path = $filename;
                $featureImage->save();
            } else {

                $upload = new Image;
                $upload->path = $filename;
                $upload->post_id = $post->id;
                $upload->save();
            }


            return redirect('/admin/update-post/' . $post->slug . '/');
        } else {
            abort(404);
        }
    }

    public function detail($slug){
        $blog=Post::whereSlug($slug)->first();
        // dd($blog);
        if ($blog) {
            return view('pages.frontend.blog.blog-single',compact('blog'));
        } else {
            return 404;
        }
    }

    public function home(){
        $blogs=Post::all();
        return view('pages.frontend.blog.blog-article', compact('blogs'));
    }


}
