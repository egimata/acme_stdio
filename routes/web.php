<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductCatController;
use App\Http\Controllers\Posts\PostsCatController;

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

Route::get('/', 'WelcomeController@index');
Route::get('posts_cat/posts/{post}',  [ProductCatController::class, 'show'])->name('posts_cat.show');
// Route::get('posts_cat/{post}', [PostsCatController::class, 'post'])->name('posts_cat.post');

Route::get('product_cat/categories/{category}', [ProductCatController::class, 'category'])->name('product_cat.design');
Route::get('blog/categories/{category}', [ProductCatController::class, 'category1'])->name('blog.category');

// Route::get('product_cat/tags/{tag}', [ProductCatController::class, 'tag'])->name('product_cat.design');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categories', 'CategoriesController')->middleware('auth');
Route::resource('posts', 'PostsController')->middleware(['auth', 'verifyCategoriesCount']);
Route::resource('subposts', 'SubPostsController')->middleware(['auth', 'verifyPostsCount']);
Route::resource('tags', 'TagsController')->middleware('auth');
Route::get('trashed-posts', 'PostsController@trashed')->name('trashed-posts.index');
Route::get('trashed-subposts', 'SubPostsController@trashed')->name('trashed-subposts.index');
Route::put('restore-post/{post}', 'PostsController@restore')->name('restore-posts');
Route::put('restore-subpost/{subpost}', 'SubPostsController@restore')->name('restore-subposts');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});

Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
Route::put('users/profile', 'UsersController@update')->name('users.update-profile');

