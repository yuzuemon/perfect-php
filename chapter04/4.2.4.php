<?php

// 参照による引数と返り値
function add_one(&$value) {
  $value += 1;
}

$a = 10;
$c = add_one($a);

// 変数a そのものが変更されている
echo $a, PHP_EOL; // 11

// ちなみに値を直接渡すとエラー
//add_one(2); // Fatal error: Only variables can be passed by reference


// 関数の返り値に参照を用いたい場合は、関数名の前に & をつけて定義する。
// return に直接値を指定するのはNG
function &add_one2(&$value) {
  $value += 1;
  return $value;
}
$a = 10;
$b = &add_one2($a); // 関数の返り値を参照で受け取る必要がある
$b += 1;            // $b は $a の参照なので、$a の値も更新される

echo $a, PHP_EOL;   // 12



// 以下個人的に
// return すればいいんじゃね？
function add_one3(&$value) {
  $value += 1;
  return $value;
}

$a = 10;
$c = add_one3($a);

echo $a, PHP_EOL; // 11
echo $c, PHP_EOL; // 11

// そもそも参照渡ししなくてはならないシチュエーション少なくない？
