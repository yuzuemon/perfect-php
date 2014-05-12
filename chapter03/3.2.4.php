<?php

// エラー制御演算子
$var = @$_GET['foo'];
echo $var, PHP_EOL;


// 実行演算子
$result = `grep -irn php *`;
echo $result, PHP_EOL;
