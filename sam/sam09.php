<?php
//P66 sam09連想配列(ディクショナリと同じ)、連想配列は[0]、[1]等の添え字がない
//foreach文 配列内の要素全てを繰り返す
//変数fruitsの要素にそれぞれ $english, $japanese という変数名をつけて処理の繰り返しを行う
$fruits = [
    // キー     値
    'apple' =>'りんご',
    'grape' =>'ぶどう',
    'lemon' =>'レモン',
    'tomato' =>'トマト',
    'peach' =>'もも'
];
//繰り返し(配列名 as キー(キーの名前は自由) => 値(値の名前は自由))
foreach($fruits as $english => $japanese){
    print($english. ':'. $japanese. "<br>");
}
?>