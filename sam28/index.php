<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ファイルアップロードを受信する</h1> 
    <!-- sam28 P126 -->
    <!-- ファイルアップロードの場合method=""はgetではなく必ずpostである必要がある,getではファイルが送信されない -->
    <!-- enctypeはencode typeの略,エンコード作業を実施する、ファイルアップロードではenctype="multipart/form-data"の記述が必須 -->
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <input type="text" name="ok">
        写真：<input type="file" name="picture">
        <input type="submit" value="picture">
    </form>   
</body>
</html>