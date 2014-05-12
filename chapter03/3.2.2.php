<?php

// 三項演算子
$param = isset($argv[1]) ? $argv[1] : 'default';


// 三項演算子と同じものをif文で書いた場合
if (isset($argv[1])) {
  $param = $argv[1];
} else {
  $param = 'default';
}


// 三項演算子の省略記法
function some_func() {
  $val = 0;
  // なんかの処理(error時には false が返るとする)
  return $val;
}

$result = some_func() ? some_func() : 'default'; // この表記の場合、2度実行される
$result = some_func() ?: 'default';              // これだと1会の実行で済む


// 三項演算子のネスト
$flag1 = true;
$flag2 = false;

echo $flag1 ? 1 : $flag2 ? 2 : 0;
// echo ( ( $flag1 ? 1 : $flag2 ) ? 2 : 0 ) ;  // 実行順序 結果 => 2

// PHP の三項演算子は左結合(他言語は右結合)の為、() で必ず明示する
echo ($flag1 ? 1 : ($flag2 ? 2 : 0));
