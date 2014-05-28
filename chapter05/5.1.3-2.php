<?php

class Employee{
  public $name;
  private $state = '働いている'; // privateなのでクラスの内側からしかアクセスできない

  public function work(){
    echo '書類を整理しています', PHP_EOL;
  }
}

echo $yamada->state, $yamada->name, 'さん: ';
echo $yamada->work(), PHP_EOL;
