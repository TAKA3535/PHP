<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file = $_FILES['picture'];
    ?>
    ファイル名(name) : <?php print($file['name']. '<br>'); ?>
    ファイルタイプ(type) : <?php print($file['type']. '<br>');?>
    アップロードされたファイル(tmp_name) : <?php print($file['tmp_name']. '<br>');?>
    エラー内容(error) : <?php print($file['error']. '<br>');?>
    サイズ(size) : <?php print($file['size']. '<br>');?>

    <?php
    $ext = substr($file['name'], -4);
    if ($ext == '.gif' || $ext == '.jpg' || $ext == '.png'):
        $filePath = '.user_img'. $file['name'] ;
        $success = move_uploaded_file($file['tmp_name'], $filePath);
        if($success):
    ?>
    <img src="<?php print($filePath); ?>">
        <?php else: ?>
            ＊ファイルアップロードに失敗しました
        <?php endif; ?>
        <?php else: ?>
            ＊拡張子が.gif,.jpg,.pngのいずれかのファイルをアップロード
        <?php endif; ?>
</body>
</html>