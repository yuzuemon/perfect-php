<?php

$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
  echo $value, PHP_EOL;
}


$fruits_color = array(
  'apple'  => 'red',
  'banana' => 'yellow',
  'orange' => 'orange',
);

foreach ($fruits_color as $name => $color) {
  echo "$name is $color", PHP_EOL;
}


// 反復時に参照を用いる
foreach ($fruits_color as $color) {
  $color = 'black';
}
var_dump($fruits_color); // 一時的な変数にコピーされている為、要素の書き換えができていない。


foreach ($fruits_color as &$color) {
  $color = 'black';
}
var_dump($fruits_color); // すべての要素がblackになっている
unset($color); // $color の参照が保持されている為、unset()しとくと安全
