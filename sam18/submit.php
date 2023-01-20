<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--htmlspecialchars：いたずら防止  -->
    <!--$_POST["gender"]：postの送信方法で送られた値を受け取る、値が複数ある場合["gender","・・・","・・・"]のように続く  
    $_POST[]の中はindex.htmlで書いたname属性と同じ名前である必要がある-->
    <!--ENT_QUOTES：安全に受け取る記号を指定  -->
性別：<?php print(htmlspecialchars($_POST["gender"], ENT_QUOTES));?>
</body>
</html>