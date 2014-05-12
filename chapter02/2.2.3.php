<?php

$array = array(1,2,3,4,5,); // $arrayはすべてのグローバルスコープからアクセス可能
foreach ($array as $i) {    // foreach構文で配列を走査
  echo $i, PHP_EOL;
}
echo "Last: ", $i, PHP_EOL; // foreach構文を抜けた後でも$iを使えます
