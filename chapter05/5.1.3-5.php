<?php

class Employee{
  public static $company = '技術評論社';
  public function getCompany(){
    return self::$company; // Employee::$company と同義
  }
}
