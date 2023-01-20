<?php
    session_start(); //セッションの初期化
    //$_SESSION：セッションに値を保存
    //'save_message'は保存名,'save_message'に'値をセッションに保存した'を代入
    $_SESSION['session_message'] = '値をセッションに保存した';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        セッションに値を保存しました。次のページに移動
        &raquo;<a href="page02.php">Page02へ</a> 
    </pre>
</body>
</body>
</html>