<?php

namespace Project\Module;

require_once 'Foo/Bar/Baz.php';
require_once 'Hoge/fuga.php';
require_once 'Module/Klass/Some.php';

use Foo\Bar as BBB;
use Hoge\Fuga;

class Piyo {};

$obj1 = new \Directory(); // 完全修飾なので, グローバルのDirectoryクラス
$obj2 = new BBB\Baz();    // エイリアスに基いて, Foo\Bar\Bazクラスとなる
$obj3 = new Fuga();       // インポートルールに基いて, Hoge\Fugaクラスとなる
$obj4 = new Klass\Some(); // Project\Module\Klass\Someクラス
$obj5 = new Piyo();       // Project\Module\Piyoクラス

some_func();              // Project\Module\some_func()関数を探し、なければグローバル関数を実行
BBB\SOME_CONST;           // Foo\Bar\SOME_CONST定数
SOME_CONST;               // Project\Module\SOME_CONST定数を探し、なければグローバルの定数が評価される
