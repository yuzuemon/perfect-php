<?php

$a = array('a' => 1, 'b' => 3, 'c' => 5);
$b = array('a' => 1, 'b' => 5, 'c' => 3);
$c = array('a' => 1, 'b' => 2);

var_dump($a == $b);  // false
var_dump($a === $b); // false

var_dump($a + $c); // 既に $c 内の key と同名の $a 内の key があるため変化なし
var_dump($c + $a); // $c['c'] に int(5) が追加


// 配列内のキーがセットされているか調べる
$array = array('hoge' => 1, 'fuge' => 2);
var_dump(array_key_exists('hoge', $array)); // true (全走査)
var_dump(isset($array['hoge']));            // true (見つかれば抜ける。こっちの方が速い)
