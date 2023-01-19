<?php
// sam14 ファイルの読み込み
// 使うfunc:file_get_contents,print
$news = file_get_contents("./news_data/news.txt");
print($news);
?>