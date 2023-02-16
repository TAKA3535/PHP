<?php
// 4-1,4-2 P111
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// class HelloMiddleware
// {
//     public function handle($request, Closure $next)
//     {
//         $data = [
//             ['name' => 'taro', 'mail' => 'taro@yamada'],
//             ['name' => 'hanako', 'mail' => 'hanako@flower'],
//             ['name' => 'sachiko', 'mail' => 'sachico@happy'],
//         ];

        // 配列data($data)にdataというを名前を付けて
        //marge() 内容を追加
//         $request->merge(['data' => $data]);
//         return $next($request);
//     }
// }

// 4-6 レスポンス操作　P115
class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);
        return $response;
    }
}
