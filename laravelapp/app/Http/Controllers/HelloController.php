<?php
// namespaceはimport文みたいなもの
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// <!-- ↓2-7 P42 -->
// 10行目はControllerクラスを継承したHelloControllerクラス
// アクション処理
// class HelloController extends Controller
// {
//     public function index() {
//         return <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Index</h1>
//     <p>これは、Helloコントローラのindexアクションです。</p>
// </body>
// </html>
// EOF;

//     }
// }

// リスト2-9　P44
// class HelloController extends Controller
// {

//    public function index($id='noname', $pass='unknown') {

//       return <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//    margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//    <h1>Index</h1>
//    <p>これは、Helloコントローラのindexアクションです。</p>
//    <ul>
//        <li>ID: {$id}</li>
//        <li>PASS: {$pass}</li>
//    </ul>
// </body>
// </html>
// EOF;

//    }
// }

// 2-11 P46
// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//    margin:-40px 0px -50px 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt) {
//    return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {

//    public function index() {
//        global $head, $style, $body, $end;

//        $html = $head . tag('title','Hello/Index') . $style . $body
//            . tag('h1','Index') . tag('p','this is Index page')
//            . '<a href="/hello/other">go to Other page</a>'
//            . $end;
//        return $html;
//    }

//    public function other() {
//        global $head, $style, $body, $end;

//        $html = $head . tag('title','Hello/Other') . $style . $body
//            . tag('h1','Other') . tag('p','this is Other page')
//            . $end;
//        return $html;
//    }

// }

// 2-13 P49
// class HelloController extends Controller
// {

//    public function __invoke() {

//      return <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:30pt; text-align:right; color:#eee;
//   margin:-15px 0px 0px 0px; }
// </style>
// </head>
// <body>
//   <h1>Single Action</h1>
//   <p>これは、シングルアクションコントローラのアクションです。</p>
// </body>
// </html>
// EOF;

//    }

// }

// リスト2-15 P52
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

// class HelloController extends Controller
// {

//    public function index(Request $request, Response $response) {

// $html = <<<EOF
// <html>
// <head>
// <title>Hello/Index</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:120pt; text-align:right; color:#fafafa;
//   margin:-50px 0px -120px 0px; }
// </style>
// </head>
// <body>
//   <h1>Hello</h1>
//   <h3>Request</h3>
//   <pre>{$request}</pre>
//   <h3>Response</h3>
//   <pre>{$response}</pre>
// </body>
// </html>
// EOF;
//        $response->setContent($html);
//        return $response;
//    }

// }

// 3-3
// class HelloController extends Controller
// {
//     public function index()
//     {
//     return view('hello.index');
//     }
// }

// 3-6
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
//         return view('hello.index', $data);
//     }
// }

// 3-8
// class HelloController extends Controller
// {
//     public function index($id = 'zero')
//     {
//         $data = [
//             'msg' => 'これはコントローラから渡されたメッセージです。',
//             'id' => $id
//         ];
//         return view('hello.index', $data);
//     }
// }

// 3-10
// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//         $data = [
//             'msg' => 'これはコントローラから渡されたメッセージです。',
//             'id' => $request->id
//         ];
//         return view('hello.index', $data);
//     }
// }

// 3-13 P69
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = [
//             'msg' => 'これはBladeを利用したサンプルです。',
//         ];
//         return view('hello.index', $data);
//     }
// }

// 3-15
// class HelloController extends Controller
// {

//     public function index()
//     {
//         $data = [
//             'msg' => 'お名前を入力下さい。',
//         ];
//         return view('hello.index', $data);
//     }

//     public function post(Request $request)
//     {
//         $msg = $request->msg;
//         $data = [
//             'msg' => 'こんにちは、' . $msg . 'さん！',
//         ];
//         return view('hello.index', $data);
//     }
// }

// リスト3-18
// class HelloController extends Controller
// {

//     public function index()
//     {
//         return view('hello.index', ['msg' => '']);
//     }

//     public function post(Request $request)
//     {
//         return view('hello.index', ['msg' => $request->msg]);
//     }
// }

// 3-20 P78
// class HelloController extends Controller
// {

//     public function index()
//     {
//         return view('hello.index');
//     }

//     public function post(Request $request)
//     {
//         return view('hello.index', ['msg' => $request->msg]);
//     }
// }

//3-22 P80
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = ['one', 'two', 'three', 'four', 'five'];
//         return view('hello.index', ['data' => $data]);
//     }
// }

// 3-32 P96
// class HelloController extends Controller
// {
//     public function index()
//     {
//         $data = [
//             ['name' => '山田たろう', 'mail' => 'taro@yamada'],
//             ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
//             ['name' => '鈴木さちこ', 'mail' => 'sachico@happy']
//         ];
//         return view('hello.index', ['data' => $data]);
//     }
// }

// 3-38
// class HelloController extends Controller
// {
//     public function index()
//     {
//         return view('hello.index', ['message' => 'Hello!']);
//     }
// }


// リスト4-4 P112
// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//         return view('hello.index', ['data' => $request->data]);
//     }
// }

// 4-8 P117
// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//         return view('hello.index');
//     }
// }

// 4-15 P123
class HelloController extends Controller
{

    public function index(Request $request)
    {
        return view('hello.index', ['msg' => 'フォームを入力：']);
    }


    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}
