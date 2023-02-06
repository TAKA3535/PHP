<?php
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// 2-8 P43 ,↓はサンプルコードだがエラーになる、↑の書き方だとOK
// Route::get('hello', 'HelloController@index');

// 2-10
// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/{id?}/{pass?}', 'HelloController@index');　←だとエラー

// 2-12
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/other', 'App\Http\Controllers\HelloController@other');

// 2-14
// Route::get('hello', 'App\Http\Controllers\HelloController');

// 2-16
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// リスト3-2 P60
// Route::get('hello', function() {
//    return view('hello.index');
// });

// リスト3-4
Route::get('hello', 'App\Http\Controllers\HelloController@index');