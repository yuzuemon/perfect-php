<?php

$a = 10;
$ref =& $a;
$ref = 20;
echo $a, PHP_EOL; // 20

$a = 10;
$c = 20;
$ref =& $a;
$ref =& $c;
$ref = 30;

echo $a, PHP_EOL; // 10
echo $c, PHP_EOL; // 30


// 配列と参照
function array_pass($array) {
  $array[0] *= 2;
  $array[1] *= 2;
}

$a = 10;
$b = 20;

$array = array($a, &$b);
array_pass($array);

echo $a, PHP_EOL; // 10
echo $b, PHP_EOL; // 40

$a = 10;
$b = 20;

$array = array($a, $b);
array_pass_ref($array);

echo $a, PHP_EOL; // 10
echo $b, PHP_EOL; // 20


