<?php

class Foo {
  public function helloGateway(){
    self::hello();
  }

  public static function hello(){
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}


class Bar extends Foo {
  public static function hello(){
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}

$bar = new Bar();
$bar->helloGateway(); // Foo hello!


// 遅延静的束縛
class Hoge {
  public function helloGateway(){
    static::hello();
  }

  public static function hello(){
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}


class Fuge extends Hoge {
  public static function hello(){
    echo __CLASS__, ' hello!', PHP_EOL;
  }
}

$fuge = new Fuge();
$fuge->helloGateway(); // Fuge hello!
