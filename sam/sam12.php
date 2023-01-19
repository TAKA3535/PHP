<?php
// sam12 P76 書式を整える
// 使うファンクション:print,sprintf
// %○○d→数値,%○○s→文字列
//             4桁の数字　2桁の数字
$date = sprintf("%04d年 %02d月 %02d日", 2023,1, 19);
print($date); 
?>