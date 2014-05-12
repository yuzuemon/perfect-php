<?php

// 命名規則 モジュール名_関数名
function mymodule_abs ($num) {
  if ($num < 0) {
    return - $num;
  }
  return $num;
}


// 引数のデフォルト値
function hello ($name, $greeting = 'Hello! ') {
  echo $greeting, $name, PHP_EOL;
}

hello('Bob', 'Good morning! '); // Good morning! Bob
hello('Tom');                   // Hello! Tom

