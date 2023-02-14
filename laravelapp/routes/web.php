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
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// 3-9 P65
// Route::get('hello/{id?}', 'App\Http\Controllers\HelloController@index');

// 3-11
// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// 3-16 P72
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::post('hello', 'App\Http\Controllers\HelloController@post');

// 4-3 ミドルウェアの実行 P112 
use App\Http\Middleware\HelloMiddleware;

// Route::get('hello', 'App\Http\Controllers\HelloController@index')
//     ->middleware(HelloMiddleware::class);

// 4-13
// Route::get('hello', 'App\Http\Controllers\HelloController@index')
//     ->middleware('helo');

// 4-16 P123
Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');
// 5-10 4-16とセット 
Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');
// 5-13 4-16,5-10とセットP201
Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');
// 5-16 5-13,4-16,5-10とセット
Route::get('hello/del', 'App\Http\Controllers\HelloController@del');
Route::post('hello/del', 'App\Http\Controllers\HelloController@remove');
// 5-20 4-16以降セット
Route::get('hello/show', 'App\Http\Controllers\HelloController@show');

// 6-4 
Route::get('person', 'App\Http\Controllers\PersonController@index');

// 6-9
Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');

// 6-21
Route::get('person/add', 'App\Http\Controllers\PersonController@add');
Route::post('person/add', 'App\Http\Controllers\PersonController@create');

// 6-24
Route::get('person/edit', 'App\Http\Controllers\PersonController@edit');
Route::post('person/edit', 'App\Http\Controllers\PersonController@update');

// 6-26 
Route::get('person/del', 'App\Http\Controllers\PersonController@delete');
Route::post('person/del', 'App\Http\Controllers\PersonController@remove');

// 6-34
Route::get('board', 'App\Http\Controllers\BoardController@index');

Route::get('board/add', 'App\Http\Controllers\BoardController@add');
Route::post('board/add', 'App\Http\Controllers\BoardController@create');