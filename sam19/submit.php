<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ご予約日：
    <?php
    // foreach：配列内の要素全てを取り出す
    // reserve配列の中身に変数reserveという名前を付けてprint()の処理を繰り返す
    foreach($_POST["reserve"] as $reserve){
        //htmlspecialchars：いたずら防止、やってることはprint($reserve.' ');
        // $reserveと半角スペースを表示
        print(htmlspecialchars($reserve, ENT_QUOTES).' ');
    }
    ?>
</body>
</html>