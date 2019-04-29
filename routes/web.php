<?php

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

Route::get('/', 'FrontController@index')->name('root_path');
Route::get('/contact', 'FrontController@contact')->name('contact');

Route::get('_test', function(){
    return view('_test');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::group(['prefix' => 'la-societe'], function () {
    Route::get('/presentations', 'FrontController@presentations')->name('societe.presentations');
    //Route::get('/{slug}', 'FrontController@posts');
});

Route::get('/{slugCategory}/{slugPost}', 'FrontController@getPostForThisCategory');


Route::get('/home', function () {
    $posts = App\Post::all();
    return view('home', compact('posts'));
});

Route::get('/category', function () {
    $category = App\Category::orderBy('order', 'asc')->get();
    return view('category', compact('category'));
});

Route::get('/post', function () {
    $category = App\Category::find(8)->posts;
    dd($category);
});
/*

Route::get('/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
    dd($slug);
	return view('post', compact('post'));
});*/