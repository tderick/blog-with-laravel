<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CKEditorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.admin.admin-base');
// });

Route::get('/', function () {
    return view('layouts.frontend.frontend-base');
});

Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::get("/admin/new-post", [PostController::class, 'index']);
Route::post('/admin/save-post', [PostController::class, 'savePost'])->name('save-post');
Route::get('/admin/new-blog', [BlogCategoryController::class,'newBlog'])->name('newBlog');
Route::post('/verification', [BlogCategoryController::class,'submitVerification'])->name('verification');
Route::get ('/listing', [BlogCategoryController::class,'listingBlog'])->name('listing');
Route::delete('delete/{id}',[BlogCategoryController::class,'deleteBlog'])->name('delete');
Route::post('/edit/{id}', [BlogCategoryController::class,'editBlog'])->name('edit');
Route::post('/verificate/{id}',[BlogCategoryController::class,'editVerificate'])->name('editVerificate');

// frontend route
Route::get('/home', [BlogCategoryController::class,'home'])->name('home');
Route::get('detail/{id}', [PostController::class,'detail'])->name('detail');
