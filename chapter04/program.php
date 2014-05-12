<?php

require_once 'SomeLib.php';

$obj = new SomeLib(); // 読み込んだファイルに定義されているクラスを利用できる


require_once 'SomeLib1.php';
require_once 'SomeLib2.php'; // Fatal Error: Cannot redeclare class SomeLib
