<?php

Route::get('/', '\Stillpoint\Http\Controllers\HomeController@index');
Route::get('privacy-policy', '\Stillpoint\Http\Controllers\HomeController@privacy');
Route::get('articolo/{slug}', '\Stillpoint\Http\Controllers\HomeController@article');

Route::get('pull', '\Stillpoint\Http\Controllers\HomeController@pull');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::post('model/upload_image', '\Stillpoint\Http\Controllers\Admin\ImagesController@store');
    Route::post('model/get_images', '\Stillpoint\Http\Controllers\Admin\ImagesController@index');

    Route::post('model/upload_attachment', 'Admin\AttachmentsController@store');

    Route::get('/', function(){
        return redirect()->to('admin/news');
    });

    #   news ROUTES

    Route::get('news', [
        'as'    => 'admin_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@index'
        ]);

    Route::get('news/crea', [
        'as'    => 'admin_create_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@create'
        ]);

    Route::post('news', [
        'as'    => 'admin_store_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@store'
        ]);

    Route::get('news/{id}/modifica', [
        'as'    => 'admin_edit_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@edit'
        ]);

    Route::post('news/{id}', [
        'as'    => 'admin_store_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@update'
        ]);

    Route::post('news/{id}/rimuovi', [
        'as'    => 'admin_delete_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@destroy'
        ]);

    Route::delete('news/{id}/delete_image', [
        'as'    => 'admin_delete_news',
        'uses'  => '\Stillpoint\Http\Controllers\Admin\NewsController@destroyImage'
        ]);

    

});
Route::get('{view}', function ($view) {
    try {
      return view('static.'.$view);
    } catch (\Exception $e) {
      abort(404);
    }
  })->where('view', '.*');