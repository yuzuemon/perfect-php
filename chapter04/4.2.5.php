<?php

// 無名関数
$add = function($v1, $v2) {
  return $v1 + $v2;
};


// コールバック関数内で無名関数を利用する例
$array = array(
  '"ダブルクォート"',
  '<tag>',
  '\'シングルクォート\''
);

$escaped = array_map(function($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($array);
var_dump($escaped);


// クロージャ
$my_pow = function($times = 2) {
  return function($v) use (&$times) {
    return pow($v, $times);
  };
};

$cube = $my_pow(3);
echo $cube(1), PHP_EOL; // 1
echo $cube(2), PHP_EOL; // 8
echo $cube(4), PHP_EOL; // 64
echo $cube(8), PHP_EOL; // 512


// create_function()関数(つかわない)
$array = array(1, 2, 3, 4, 5);
array_map(create_function('$v', 'return $v * 2;'), $array);

// 無名関数でcreate_function()関数と同等の実装(こっちの方が楽)
$array = array(1, 2, 3, 4, 5);
array_map(function ($v) { return $v * 2; }, $array);
