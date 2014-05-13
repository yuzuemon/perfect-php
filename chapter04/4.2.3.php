<?php

// 関数の呼び出し
$array = array(1, 2, 3, 4, 5);
$first_value = array_shift($array); // $array を引数に、array_shift()関数を呼び出す


// コールバック関数
$array = array(1, 1.5, "2", true);
$new_array = array_map('strval', $array);
var_dump($new_array);


// 可変関数
// 引数に与えられた名前を持つ関数が存在すれば呼び出すための関数
function func_caller($name) {
  if (function_exists($name)) {
    $name(); // 可変関数として関数の呼び出し
  }
}

function foo() {
  echo 'foo called', PHP_EOL;
}

func_caller('foo'); // foo called


// call_user_func() と call_user_func_array()
function add($v1, $v2) {
  return $v1 + $v2;
}

class Math {
  public function sub($v1, $v2) {
    return $v1 - $v2;
  }

  public static function add ($v1, $v2) {
    return $v1 + $v2;
  }
}

// call_user_func()関数では、コールバック関数の指定につづいて引数を指定
call_user_func('add', 1, 2); // 3

// コールバック関数には、無名関数も指定できる
call_user_func(function($v1, $v2) { return $v1 + $v2;}, 1, 2); // 3

// staticメソッドの場合、クラス名を文字列で指定できる
call_user_func(array('Math', 'add'), 1, 2); // 3

// staticメソッドの場合、「クラス名::メソッド名」という文字列でも指定できる
call_user_func('Math::add', 1, 2); // 3

// インスタンス変数とメソッド名を指定する場合
$math = new Math();
call_user_func(array($math, 'sub'), 1, 2); // -1

// call_user_func_array()では、第二引数に配列で引数のリストを指定
call_user_func_array('add', array(1,2)); // 3
call_user_func_array(array($math, 'sub'), array(1, 2)); // -1
