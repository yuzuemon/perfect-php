<?php

// 返り値を返さない関数の定義
function no_return_func() {
}

$null_value = no_return_func(); // null が代入される


$var = 1;
var_dump(isset($var)); // true.  変数 var は定義されている。
$var = null;
var_dump(isset($var)); // false. 変数 var は null のためセットされていないとされる。
var_dump($var);        // null.  変数 $var は null.

unset($var);
var_dump(isset($var)); // false. 変数 var は unset()されている.
var_dump($var);        // unset されたため Notice (Undefined variable) が発生。値はNull

