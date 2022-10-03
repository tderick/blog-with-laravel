<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('layouts.admin.admin-base');
});

Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::get("/admin/new-post", [PostController::class, 'index']);
Route::post('/admin/create-post', [PostController::class, 'createPost'])->name('create-post');
Route::get('/admin/update-post/{slug}/', [PostController::class, 'editPostForm']);
Route::post('/admin/save-post/{slug}/', [PostController::class, 'save'])->name('name');
