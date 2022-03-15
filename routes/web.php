<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\BlogController@index']);
Route::get('/article/{id}', ['as' => 'article-details', 'uses' => 'App\Http\Controllers\DetailsController@index']);
Route::post('/commentary/delete/{id}',['as' => 'commentary.delete', 'uses' => 'App\Http\Controllers\CommentaryController@delete']);

Auth::routes();
            

Route::prefix('admin')
  ->middleware(['auth', 'can:accessAdmin'])
  ->group( function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::resource('system', 'App\Http\Controllers\SystemController', ['except' => ['show']]);
	Route::get('user', ['as' => 'user.index', 'uses' => 'App\Http\Controllers\UserController@index']);
	Route::get('user/create', ['as' => 'user.create', 'uses' => 'App\Http\Controllers\UserController@create']);
	Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'App\Http\Controllers\UserController@edit']);
	Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'App\Http\Controllers\UserController@delete']);
	Route::get('system/edit', ['as' => 'system.edit', 'uses' => 'App\Http\Controllers\SystemController@edit']);
});

Route::prefix('user')
->middleware('auth')
->group( function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::post('/article/{id}/commentary',['as' => 'commentary.store', 'uses' => 'App\Http\Controllers\CommentaryController@store']);
});


Route::prefix('author')
  ->middleware(['auth', 'can:accessAdminAuthor'])
  ->group( function () {
	Route::get('category', ['as' => 'category.index', 'uses' => 'App\Http\Controllers\CategoryController@index']);
	Route::get('category/create', ['as' => 'category.create', 'uses' => 'App\Http\Controllers\CategoryController@create']);
	Route::get('category/edit/{id}', ['as' => 'category.edit', 'uses' => 'App\Http\Controllers\CategoryController@edit']);
	Route::get('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'App\Http\Controllers\CategoryController@delete']);
	Route::get('post', ['as' => 'post.index', 'uses' => 'App\Http\Controllers\PostController@index']);
	Route::get('post/create', ['as' => 'post.create', 'uses' => 'App\Http\Controllers\PostController@create']);
	Route::get('post/edit/{id}', ['as' => 'post.edit', 'uses' => 'App\Http\Controllers\PostController@edit']);
	Route::get('post/delete/{id}', ['as' => 'post.delete', 'uses' => 'App\Http\Controllers\PostController@delete']);
	Route::put('profile/password/{id}', ['as' => 'user.password', 'uses' => 'App\Http\Controllers\UserController@password']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::resource("category", "App\Http\Controllers\CategoryController");
	Route::resource("post", "App\Http\Controllers\PostController", ['except' => ['show']]);
});

Auth::routes();

