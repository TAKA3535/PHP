<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>-1行ごとにテーブルセルの色を変える-剰余算</h1>
<table>
<?php
for ($i=1; $i<=10 ; $i++) { 
    // if (($i % 2) == 1) { 下の行と同じ、== 1省略可
    if ($i % 2) {   //boolは0がfalse,1がtrueの習慣がある
        print('<tr style="background-color: #ccc">');
    }else{
        print('<tr>');
    }
    print('<td>'.$i.'行目</td>');
    print('</tr>');
}
?>
</table>
</body>
</html>