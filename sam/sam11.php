<!-- sam11 P74少数を整数に切り上げ及び切り下げ -->
<!-- 使ってるファンクション：floor,ceil,round,print -->
<!-- floor:小数点以下切り捨て,小数点以下四捨五入(第2引数で小数点以下第何位を四捨五入するか決める) -->
<!-- ceil:小数点以下切り上げ -->
<!-- round: -->
3,000円のものから100円引きした場合<?php print(floor(100/3000*100));?>%引き
元の計算式→<?php print(100/3000*100 ."<br>");?>
切り上げ(ceil)→<?php print(ceil(100/3000*100)."<br>");?>
<!--                                   ↓の1は小数第１位を表してる -->
四捨五入→<?php print(round(100/3000*100,1)."<br>");?>
