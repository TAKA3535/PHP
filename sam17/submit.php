<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>フォームに入力した内容を取得する</h2>
<pre>

<!-- htmlspecialchars関数
もし、フォームにHTMLタグが入力された場合、その効果を打ち消す

ENT_QUOTES
使用できる記号を指定
「’」も安全に受信します

$_REQUEST['name属性と一致させる'] か $_GET['my_name'] 
get方式で送信されたmy_nameの名前が付いた値を受け取って変数に入れる
[] 配列

getで送信 $_GET[]で受け取る
postで送信 $_POST[]で受け取る
getで送ったものもpostで送ったものも受け取れる $_REQUEST[] -->
お名前： <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>
</main>
</body>
</html>