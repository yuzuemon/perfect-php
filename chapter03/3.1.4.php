<?php

$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi, $string2 \n'; // hi, $string2 \n
$string4 = "hi, $string2 \n"; // hi, this is string \n

echo $string3, PHP_EOL;
echo $string4, PHP_EOL;


$age = 15;

// $age という変数名だが、どこまでが変数名だかわからない
echo "$ageyears old.", PHP_EOL;   // Notice: Undefined variabel: ageyears

// 波括弧で変数名を囲む
echo "{$age}years old.", PHP_EOL; // 15years old.


// ヒアドキュメント
$age = 15;

$foo = <<<EOI
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。

Tom の年齢は "$age" 歳です。
EOI;

echo $foo, PHP_EOL;


// Nowdoc
$age = 15;

$foo = <<<'EOI'
Nowdoc では、終端識別子をシングルクオートで囲みます。
複数行にわたる文章をそのまま表記することができます。

Tom の年齢は "$age" 歳です。
この $age は展開されず、$age のまま出力されます。
EOI;

class NowDocTest {
  const DOCUMENT1 = <<<'EOI'
変数やエスケープ文字を展開しないため、文字列がパースされません。
このため、const に指定できます。
EOI;

  const DOCUMENT2 = <<<EOI
PHP 5.3 からは、変数を含まない、または、ドル文字が適切にエスケープ
されていれば、ヒアドキュメントも const に指定できます。
ドルを含んだ文章は、\$foo のようにドル文字をエスケープします。
EOI;

}


echo 15.0, PHP_EOL; // 15と出力される

echo printf('%.1f', 15.0); // 明示的に出力したい場合には、printf関数を使う
