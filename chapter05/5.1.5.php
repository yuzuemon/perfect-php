<?php

class Employee{
  private static $company = '技術評論社';

  public static function getCompany(){
    return self::$company;
  }

  public static function setCompary($value){
    self::$company = $value;
  }
}
