<?php

// 継承
class Programmer extends Employee {
  public function work(){
    echo 'プログラムを書いています', PHP_EOL;
  }
}

// parent キーワード
class Programmer extends Employee {
  public function __construct($name, $type){
    parent::__construct($name, $type); // 親クラスのコンストラクタを呼び出し
    // 追加処理
  }
}

// final キーワード
class Employee {
  public $salary = 20;
  public final function getSalary(){ // 給料を取得するメソッド
    return $this->salary;
  }
}

class Programmer extends Employee {
  public function getSalary(){ // エラー
    return $this->salary *2;
  }
}
