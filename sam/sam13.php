<?php
// sam13 P78 ファイルに内容書き込み
// 使うfunc:file_put_contents,if,print
//書き込んだ容量 = file_put_contents(ファイルパス名, 書き込む内容);
// 同じ階層にある「news_data」フォルダの中にtxt形式で書き込み
$success = file_put_contents("./news_data/news.txt","2018-06-01 ホームページをリニューアルしました");
if ($success) {
    print("ファイルへの書き込み完了");
}else{
    print("書き込みに失敗、フォルダの権限などを確認してね");
}
?>