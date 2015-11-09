<?php

Route::get('/', '\Stillpoint\Http\Controllers\HomeController@index');

// Route::get('install', 'EagleController@make');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('{view}', function ($view) {
    try {
      return view('static.'.$view);
    } catch (\Exception $e) {
      abort(404);
    }
  })->where('view', '.*');