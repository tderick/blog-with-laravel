<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{

    public function newCategory(){
        return view('pages.admin.category.new_category');
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

    public function listingCategory(){
        $categories=BlogCategory::all();
        return view('pages.admin.category.listing_categories', compact('categories'));
    }

    public function deleteCategory($id){
        $cat=BlogCategory::findOrFail($id);
        $cat->delete($id);
        return redirect('/listing');
    }

    public function editCategory($id){
        $category=BlogCategory::findOrFail($id);
        return view('pages.admin.category.edit_category',compact('category'));
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

    // public function index(){

    //     return redirect('pages.frontend.blog.blog-article', [
    //         'id' => BlogCategory::table('id')->paginate(1)
    //     ]);
    // }

}
