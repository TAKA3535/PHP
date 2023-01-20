<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Cookieに値を保存する</h1>
  <!-- sam24 P113 Cookieに値を保存 -->
  <?php
  $value = '変数の保存した値です';
  //                          保存したい値　　　　　　　保存期間,いつまで所法を保存するか決めることが可
  setcookie('save_message', 'Cookieに保存した値です', time() + 60 * 60 *24 *14);
  ?>
  <pre>&raquo;<a href="page02.php">Page02へ</a> </pre>
</body>

</html>