<?php

abstract class Employee {
  abstract public function work();
}

class Programmer extends Employee {
  public function work(){
    // ...
  }
}
