<?php

$a = 1;
$b = "foo bar";
$c = array(1, 2, 3);

var_dump($a); // 整数
// int(1)

var_dump($b); // 文字列は、文字列長とその長さが出力される
// string(7) "foo bar"

var_dump($c); // 配列は、要素数、キー、値が出力される
// array(3) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
// }

var_dump($a == $b); // 演算の評価値
// bool(false)

?>

