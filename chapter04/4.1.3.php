<?php

// ... 何かしらの処理
$name = '1';

// もし $name 変数がセットされていたら
if (isset($name)) {

// ここで1つ目のPHPブロック終了
?>
  <p><?php echo $name; ?></p>


<?php
// PHPブロック再開
}
?>
