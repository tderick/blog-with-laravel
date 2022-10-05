<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function newBlog(){
        return view('pages.blog.new_blog');
    }

    public function submitVerification(Request $request){
        $request->validate([
            'name'=> 'required|max:20',
            'desc'=> 'required|max:200',
        ]);

        $data= $request->all();
        $data['slug'] = Str::slug($data['name'], '-');
        // dd($slug);
        BlogCategory::create($data);
        return view('pages.blog.new_blog');
    }

    public function listingBlog(){
        $categories=BlogCategory::all();
        return view('pages.blog.listing_blog', compact('categories'));
    }

    public function deleteBLog($id){
        $cat=BlogCategory::findOrFail($id);
        $cat->delete($id);
        return redirect('/listing');
    }

    public function editBlog($id){
        $category=BlogCategory::findOrFail($id);
        return view('pages.blog.edit_blog',compact('category'));
    }

    public function editVerificate( Request $request, $id){
        $request->validate([
            'name'=> 'required|max:20',
            'desc'=> 'required|max:200',
        ]);
        $data= $request->all();
        $data['slug'] = Str::slug($data['name'], '-');
        $element=BlogCategory::findOrFail($id);
        $element->update($data);
        return redirect('/listing');
    }

    public function home(){

        $blogs=BlogCategory::all();
        return view('pages.frontend.blog.blog-article', compact('blogs'));
    }



}
