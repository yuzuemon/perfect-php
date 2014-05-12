<?php
error_reporting(E_ALL | E_STRICT);
ini_set('dispaly_errors', 'On');

$foo = 1;

function some_function(){
  $foo = 10; // ローカル変数のセット
  $bar = 20;
}

some_function();

echo $foo, PHP_EOL; // 1
echo $bar, PHP_EOL; // Notice: Undefined variable: bar
