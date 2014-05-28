<?php

class Employee{
  public $name;
  public static $company = '技術評論社';
}

echo '従業員はみんな', Employee::$company, 'に勤めています', PHP_EOL;
