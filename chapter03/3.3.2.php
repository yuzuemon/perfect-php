<?php

// 配列の初期化
$fruits = array(
  'apple',
  'banana',
  'orange',
);

echo $fruits[0], PHP_EOL; // apple


// 最初の配列と等価
$fruits[] = 'apple';
$fruits[] = 'banana';
$fruits[] = 'orange';


// 既にスカラー型で初期化されているため、エラー
$fruits = 1;
$fruits[] = 'apple'; // Warning: Cannot use a scalar value as an array


// 複数の型を格納するパターン
$one = array(
  1,
  1.0,
  '1'
);
