<?php

$fruits_color = array(
  'apple' => 'red',
  'banana' => 'yellow',
  'orange' => 'orange',
);

echo $fruits_color['banana'], PHP_EOL; // yellow


$fruits_mixed = array(
  'peach',
  'blueberry',
  'apple' => 'red',
  'banana' => 'yellow',
  'orange' => 'orange',
);

echo $fruits_mixed[1], PHP_EOL;        // blueberry
echo $fruits_mixed['banana'], PHP_EOL; // yellow
var_dump($fruits_mixed);


// 要素の上書き
$array = array(
  4,                            // キーが0
  5,                            // キーが1
  1 => 'これは1',               // キー1に上書き
  'string_key' => '最初の定義',
  'string_key' => '次の定義',   // キー'string_key'上書き
);

var_dump($array);
