<?php

// 数値 + 文字列の場合には、数値までを抽出して変換, 文字列の場合には 0 として変換
echo (float)'15foo'    , PHP_EOL; // 15
echo (float)'15.33foo' , PHP_EOL; // 15.33
echo (float)'1e2foo'   , PHP_EOL; // 100 (1e2)
echo (float)'foo'      , PHP_EOL; // 0

// 文字列のキャスト
if ('0.0' == '0') {
  echo '"0.0" と "0" は等しいと判断されます';
}


// 入力された2つのパスワードを比較する処理
if ($password1 == $password2) { // 0123, 123 という文字列でも "等しい" と判断されてしまう
  // ユーザ登録処理
} else {
  echo "エラーです", PHP_EOL;
  exit;
}
