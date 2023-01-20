<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2023年1月のカレンダー</h1>
    <!-- sam23の応用で曜日を繰り返し出力する -->
    <?php
    $week =['土','日','月','火','水','木','金'];
    for ($i=1; $i <= 31 ; $i++) { 
        print($i. '日('. $week[$i%7]. ')<br />');
    }
    ?>
</body>
</html>