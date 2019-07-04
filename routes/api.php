<?php
use Illuminate\Http\Request;

Route::get('albums', 'Api\AlbumsController@getAll');

Route::get('users', function () {
    return factory('App\User', 10)->make();
});

/*
переписать маршрут как в примере ниже
*/
Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.', 'middleware' => ['api']], function () {
    Route::resource('projects', 'ProjectsController', ['except' => ['create', 'edit']]);
});