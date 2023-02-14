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
    <!-- Bladeの中に用意されている便利な機能達は「@~~~~」で呼び出す
    @if→if文(条件分岐)の機能を使用する -->
    <!-- @if ($mag != '')
    <p>こんにちは、{{$msg}}さん。</p>  -->
    <!--@else -->
    <!--ここまででBladeのif文機能終わりの印 -->
    <!--<p>何か書いてください</p> -->

    <!--ここまででBladeのif文機能終わりの印 -->
    <!-- @endif -->

    <!-- 3-19 P77 -->
    <!-- issetは結果がbool型で返ってくるので条件分岐と組み合わせることができる -->
    <!-- 変数msgに値が入っているかどうか見る -->
    <!-- @isset($msg) -->
    <!-- Trueの場合に行う処理 -->
    <!-- <p>こんにちは、{{$msg}}さん。</p> -->
    <!-- @else -->
    <!-- Falseの場合に行う処理 -->
    <!-- <p>何か書いてください</p> -->
    <!-- issetディレクティブ終了 -->
    <!-- @endisset -->

    <!-- 3-14 P70 -->
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">

</body>

</html>