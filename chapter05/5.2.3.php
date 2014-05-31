<?php

// タイプヒンティング
class Foo {
  public function bar (Iterator $itr){
    // ...
  }
}


// 型演算子
class Foo {
  public function bar($itr){
    if ( $itr instanceof Iterator === false) {
      throw new InvalidArgumentException('Interface Error');
    }
  }
}
