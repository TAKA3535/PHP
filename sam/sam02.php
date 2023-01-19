<?php
// sam02
// print(123+2*5/3)

// sam03
// date_default_timezone_set('Asia/Tokyo');
// print(date('G時 i分 s秒'));
// print("\n");
// print("現在は".date("G時i分s秒")."です");

// // sam04  P45 
// // 次の行では$で変数today作成して、newでインスタンス化したDateTIme()をtodayに代入
// $today = new DateTime();
// // 
// print("現在は".$today->format("G時i分s秒")."です") 

// sam5 P47
$sum = 100+1050+200;
?>
合計金額は：<?php print($sum); ?>円です
税込金額は：<?php print($sum * 1.08); ?>円です