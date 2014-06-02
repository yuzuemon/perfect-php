<?php

namespace Project\Module;

$class_name = 'Project\Module\SomeClass';
$obj = new $class_name(); // new Project\Module\SomeClass();


// ダブルクォートの場合
namespace Project\Module;

$namespace = "Project\\Module\\"; // ダブルクォートの場合、\"が"のエスケープとならないように、末尾は \\" とする必要がある
$class_name = 'SomeClass';
$class_name_with_ns = $namespace . $class_name;

$obj = new $class_name_with_ns(); // new Project\Module\SomeClass();


// 動的な名前空間の利用はできない。
namespace Project\Module;
use Project\Module2 as Another;

$class_name = 'Another\SomeClass'; // 文字列の為、コンパイル時の変換ができない
$obj = new $class_name(); // new AnotherModule\SomeClass() となり、名前解決ができない
