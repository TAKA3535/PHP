<?php

// use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// P33 リスト2-3 HTMLを出力する
// Route::get('/hello', function () {
//     //HTMLを出力
//     return '<html><body><h1>hello</h1><p>This is sample page.</p></body></html>';
// });

// P34 2-4
// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// 2-5 P35
// Route::get('hello!',function () use ($html) {
//     return $html;
// });

// Route::get('hello!!/{msg?}',function ($msg='no message.') {

//     $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body {font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee;
//        margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//        <h1>Hello</h1>
//        <p>{$msg}</p>
//        <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
//     EOF;
    
//        return $html;
//     });
?>