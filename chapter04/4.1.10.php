<?php

$hour = date('G'); // 現在の時刻を取得
echo $hour, PHP_EOL;
if ($hour === '6') {
  echo "朝の6時です。おはようございます。", PHP_EOL;
} elseif ($hour === '12') {
  echo "正午ですこんにちは。", PHP_EOL;
} elseif ($hour === '15') {
  echo "3時のおやつの時間です。", PHP_EOL;
} else {
  echo "どうも", PHP_EOL;
}


// switch 文で書き換え
switch ($hour) {
  case '6':
    echo "朝の6時です。おはようございます。", PHP_EOL;
    break;
  case '12':
    echo "正午ですこんにちは。", PHP_EOL;
    break;
  case '15':
    echo "3時のおやつの時間です。", PHP_EOL;
    break;
  default:
    echo "どうも", PHP_EOL;
    break;
}


// breakを書かずに複数処理
switch ($hour) {
  case '6':
    echo "朝の6時です。おはようございます。", PHP_EOL;
    break;
  case '12':
    echo "正午ですこんにちは。", PHP_EOL;
    break;
  case '15':
    echo "3時のおやつの時間です。", PHP_EOL;
    break;
  case '22':
  case '23':
  case '0':
    echo "もう寝る時間です。", PHP_EOL;
    break;
  default:
    echo "どうも", PHP_EOL;
    break;
}
