<!-- 3-12 -->
<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <!-- 3-17 P75 -->
    <!-- @if ($msg != '')
    <p>こんにちは、{{$msg}}さん。</p>
    @else
    <p>何か書いて下さい。</p>
    @endif -->

    <!-- 3-19 P77 -->
    <!-- issetは結果がboolean型で返ってくるので条件分岐と組み合わせ
    変数msgに値が入っているかどうか見る-->
    <!-- @isset ($msg)
    <p>こんにちは、{{$msg}}さん。</p>
    @else
    <p>何か書いて下さい。</p>
    @endisset -->

    <!-- 3-14 P70 -->
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
        
</body>

</html>