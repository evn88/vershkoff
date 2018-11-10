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

Route::get('/', function () {
    return view('albums');
});

Route::get('/albums', function () {
    return view('albums');
});

Auth::routes();

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function(){
        return view('admin.index');
});
