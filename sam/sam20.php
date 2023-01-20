<?php
//sam20 P103 半角数字に直して数字であるかをチェックする
//使うfunc:if,mb_convert_kana,is_numeric
// ageに文字列を"あいうえお"を代入
$age = "あいうえお";
//「n」が全角数字を半角数字に変換する,試したら"１２３４５"も半角数字に変換してくれた
$age = mb_convert_kana($age, "n", "UTF-8");
// is_numeric()関数で指定した変数が数字または数値形式の文字列であるかどうかチェック
if (is_numeric($age)) { //ageが数字ならばTrue
    print($age . "歳");
}else{ //ageが数字以外ならFalse
    print("＊年齢が数字ではありません");
}
?>