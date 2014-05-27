<?php

class Employee{
  public function work(){
    echo '書類を整理しています', PHP_EOL;
  }
}

$yamada = new Employee();
$yamada->work();          // 書類を整理しています
