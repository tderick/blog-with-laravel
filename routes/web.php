<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Middleware\Authenticate;
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



Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::prefix('post')->group(function () {
            Route::get('/new-post', [PostController::class, 'index'])->name('new-post');
            Route::post('/create-post', [PostController::class, 'createPost'])->name('create-post');
            Route::get('/update-post/{slug}/', [PostController::class, 'editPostForm'])->name('update-post');
            Route::post('/save-post/{slug}/', [PostController::class, 'save'])->name('name');
            Route::post('/feature-image/{slug}', [PostController::class, 'featureImage'])->name('featured-image');
        });

        Route::prefix('category')->group(function () {
            Route::get('/new-category', [BlogCategoryController::class, 'newCategory'])->name('newCategory');
            Route::post('/verification', [BlogCategoryController::class, 'submitVerification'])->name('verification');
            Route::get('/listing', [BlogCategoryController::class, 'listingCategory'])->name('listing');
            Route::delete('delete/{id}', [BlogCategoryController::class, 'deleteCategory'])->name('delete');
            Route::post('/edit/{id}', [BlogCategoryController::class, 'editCategory'])->name('edit');
            Route::post('/verificate/{id}', [BlogCategoryController::class, 'editVerificate'])->name('editVerificate');
        });
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authentication', [LoginController::class, 'authentificate'])->name('authentication');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/create-account', [RegisterController::class, 'verificateAccount'])->name('verificateAccount');


// frontend route
Route::get('post/{slug}', [PostController::class, 'detail'])->name('detail');
Route::get('/', [PostController::class, 'postList'])->name('postList');
