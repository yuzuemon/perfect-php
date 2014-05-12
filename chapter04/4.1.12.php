<?php

echo 'start', PHP_EOL;
exit;
echo 'end', PHP_EOL; // 実行されない


// 終了ステータスを指定して実行
echo 'start', PHP_EOL;
exit(255); // シェルの終了ステータスが 255 になる
echo 'end', PHP_EOL; // 実行されない
