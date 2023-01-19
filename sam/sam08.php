<?php 
// sam08 P62 配列
$week_name = ['日','月','火','水','木','金','土'];
//'日', '月', '火', '水', '木', '金', '土' の値が入った配列を変数week_nameに代入
//配列名[添え字番号] 指定した添え字に対応する値を取得

print('今日は、'. $week_name[date('w')].'曜日です'.'<br>');
print($week_name[0].'<br>');
print($week_name[1].'<br>');
print($week_name[2].'<br>');
print($week_name[3].'<br>');
print($week_name[4].'<br>');
print($week_name[5].'<br>');
print($week_name[6].'<br>');
?>