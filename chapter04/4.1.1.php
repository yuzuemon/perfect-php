<?php

// 実行可能
if (true) if (true) {
  echo 1, PHP_EOL;
}


// 中括弧をを用いた表現
if (true) {
  if (true) {
    echo 1, PHP_EOL;
  }
}


// 式
$var = 1;   // 式が3つ($var, =, 1 の3つ)
($var = 1); // つまりこういうこと
