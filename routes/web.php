<?php

use App\Http\Controllers\Admin\AlbumsController;

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
    return view('albums');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

// Admin
Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware' => 'auth'], function(){
        Route::get('/', ['uses' => 'AdminController@index', 'as'=>'admin.index']);
        Route::get('/albums', ['uses'=>'AlbumsController@index', 'as'=>'admin.albums']);
        Route::get('/albums/{id}', ['uses'=>'AlbumsController@show', 'as'=>'admin.album.show']);
});
