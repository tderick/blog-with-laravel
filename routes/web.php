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

// Route::get('/', function () {
//     return view('layouts.frontend.frontend-base');
// });

Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::prefix('admin')->group(function () {

    Route::prefix('post')->group(function(){
        Route::get('/new-post', [PostController::class, 'index'])->name('new-post');
        Route::post('/create-post', [PostController::class, 'createPost'])->name('create-post');
        Route::get('/update-post/{slug}/', [PostController::class, 'editPostForm'])->name('update');
        Route::post('/save-post/{slug}/', [PostController::class, 'save'])->name('name');
        Route::post('/feature-image/{slug}', [PostController::class, 'featureImage'])->name('featured-image');
    });

    Route::prefix('category')->group(function(){
        Route::get('/new-category', [BlogCategoryController::class, 'newCategory'])->name('newCategory');
        Route::post('/verification', [BlogCategoryController::class, 'submitVerification'])->name('verification');
        Route::get('/listing', [BlogCategoryController::class, 'listingCategory'])->name('listing');
        Route::delete('delete/{id}', [BlogCategoryController::class, 'deleteCategory'])->name('delete');
        Route::post('/edit/{id}', [BlogCategoryController::class, 'editCategory'])->name('edit');
        Route::post('/verificate/{id}', [BlogCategoryController::class, 'editVerificate'])->name('editVerificate');
    });
});

// frontend route
Route::get('post/{slug}', [PostController::class, 'detail'])->name('detail');
Route::get('/', [PostController::class, 'postList'])->name('postList');
