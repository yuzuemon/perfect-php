<?php

namespace Project\Module;

class Directory {}  // Project\Module\Directory クラス
function file () {} // Project\Module\file 関数
const E_ALL = 0x01; // Project\Module\E_ALL 定数
$var = 0x01; // 変数には名前空間は適用されない


namespace Other;

require_once 'Project\Module\Directory.php';

$dir1 = new \Project\Module\Directory(); // Project\Module\Directory クラス
$dir2 = new \Directory();                // 組み込みの Directory クラス


// 1つのファイルに複数の名前空間の定義をする
// 1. 単純にnamespace宣言を複数する
// 2. {} で括る


// インポートルール

namespace Project\Module;
use Project\Module2 as AnotherModule;

$obj = new AnotherModule\SomeClass();


