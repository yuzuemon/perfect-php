<?php
// 引数の2つを足し合わせる関数
function add($v1, $v2) {
  $answer = $v1 + $v2;
  return $answer;
}

$v3 = add(1, 2);
var_dump($v3);
