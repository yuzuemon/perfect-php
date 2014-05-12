<?php
$globals_test = 1;

echo $globals_test, PHP_EOL;
echo $GLOBALS['globals_test'], PHP_EOL; // すべてのグローバル変数を連想配列として持つスーパーグローバル変数 $GLOBALS から key を指定して取得
