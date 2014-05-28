<?php

class Employee{
  public $name;
  private $state = '働いている';

  public function getState(){
    return $this->state;
  }

  public function setState($state){
    $this->state = $state;
  }

  public function work(){
    echo '書類を整理しています', PHP_EOL;
  }
}

$yamada = new Employee();
$yamada->name = '山田';
$yamada->setState('休憩している');

echo $yamada->name, 'さんは', $yamada->getState(), PHP_EOL;
// 山田さんは休憩している
