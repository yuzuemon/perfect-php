<?php

$int1 = 1;               // 正の整数
$int2 = -1;              // 負の整数
$int3 = 011;             // 8進表記で代入(9)
$int4 = 0xff;            // 16進表記で代入(255)
$int5 = PHP_INT_MAX;     // 整数型の最大値
$int6 = PHP_INT_MAX + 1; // 整数型の最大値を超えた数は自動的に浮動小数点型へ

echo $int1, PHP_EOL;
echo $int2, PHP_EOL;
echo $int3, PHP_EOL;
echo $int4, PHP_EOL;
echo $int5, PHP_EOL;
echo $int6, PHP_EOL;
