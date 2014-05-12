<?php

$a = 10;                 // 変数 a に 10 を代入する
echo $a, PHP_EOL;        // 10

echo 1 + 2, PHP_EOL;     // 3
echo '1.5' - 2, PHP_EOL; // -0.5
echo true * 2, PHP_EOL;  // 2 ( true は 1 にキャストされる)
echo 6 / 3, PHP_EOL;     // 2
echo 6 / 0, PHP_EOL;     // Warning: Division by zero

printf("%032b\n", 15);
printf("%032b\n", 51);
printf("%032b\n", 15 & 51);
printf("%032b\n", 15 | 51);
printf("%032b\n", 15 ^ 51);
printf("%032b\n", ~15);
printf("%032b\n", 15 << 1);
printf("%032b\n", 15 >> 1);

// 最上位ビットが 1 の場合
printf("%032b\n", 0xf0000000 >> 1);


// 文字列以外の型を含む文字列結合
$age = 15; // 整数型
$tom = 'Tom is ' . $age . ' years old.'; // $age が文字列型にキャストされ、すべてを文字列として連結

echo $tom, PHP_EOL;


// 整数を含めた文字列結合の場合、ドットを離す
$tom = 'Tom is ' . 15 . ' years old.'; // Tom is 15 years old.
// $bob = 'Tom is ' . 16. ' years old.';  // Parse error


// 複合演算子
$a = 10;
$a += 1;
echo $a, PHP_EOL; // これで $a は 11 となっている


// 加算子, 減算子
$a = 10;
echo $a++ , PHP_EOL; // 10
echo $a   , PHP_EOL; // 11
echo ++$a , PHP_EOL; // 12
echo $a   , PHP_EOL; // 12
echo $a-- , PHP_EOL; // 12
echo $a   , PHP_EOL; // 11
echo --$a , PHP_EOL; // 10
echo $a   , PHP_EOL; // 10


// 論理演算子
if (isset($argv[1]) && $argv[1]) {
  echo '与えられた引数は真です。', PHP_EOL;
} else {
  echo '与えられた引数がないか、与えられた引数は真ではありません。', PHP_EOL;
}

$flag and foo(); // $flag が false の場合には foo() は実行されない


// 型演算子
class SomeClass {
}
$a = new SomeClass();

if ($a instanceof SomeClass) {
  echo '$a は SomeClass のインスタンスです', PHP_EOL;
}


// 型演算子2
interface FooInterface {
}

class ParentFoo {
}

class Foo extends ParentFoo implements FooInterface {
}

class Bar {
}

$a = new Foo();
var_dump($a instanceof Foo);          // true
var_dump($a instanceof ParentFoo);    // true
var_dump($a instanceof FooInterface); // true
var_dump($a instanceof Bar);          // false
