<?php

$foo = 1;
function some_function(){
  global $foo; //global変数を利用する場合には、globalキーワードを使う
  echo $foo, PHP_EOL;
}
some_function();

