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
    <!-- 3-21   -->
    <h1>Blade/Index</h1>
    <!-- <p>&#064;foreachディレクティブの例</p>
    <ol>
        @foreach($data as $item)
        <li>{{$item}}
            @endforeach
    </ol> -->

    <!-- 3-23 -->
    <!-- <p>&#064;forディレクティブの例</p>
    <ol>
        @for ($i = 1;$i < 100;$i++) 
        @if ($i % 2==1) 
            @continue 
        @elseif ($i <=10) 
            <li>No, {{$i}}
        @else
            @break
        @endif
        @endfor
    </ol> -->

    <!-- 3-24 -->
    <!-- <body>
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
    @if ($loop->first)
        <p>※データ一覧</p><ul>
    @endif
        <li>No,{{$loop->iteration}}. {{$item}}</li>
    @if ($loop->last)
        </ul><p>――ここまで</p>
    @endif
    @endforeach
    </body> -->

    <!-- 3-25 P84 -->
    <body>
        <h1>Blade/Index</h1>
        <p>&#064;whileディレクティブの例</p>
        <ol>
            @php
            $counter = 0;
            @endphp
            @while ($counter < count($data)) 
            <li>{{$data[$counter]}}</li>
            @php
            $counter++;
            @endphp
            @endwhile
        </ol>
        <h2>わかるようなわかりにくいような...</h2>
    </body>

</html>