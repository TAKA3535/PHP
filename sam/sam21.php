<?php
//sam21 P105 郵便番号を正規表現を使ってチェックする
//使うfunc:if,mb_convent_kana,preg_match
$zip = "171-1234";
// 「a」が英数に変換する,今回は「-」があるためaを使う
$zip = mb_convert_kana($zip,"a","UTF-8");
if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip)) {
    print("郵便番号：〒".$zip);
}else{
    print("＊郵便番号を123-4567形式でご記入してください");
}
?>
