<?php

class Employee{
  const PARTTIME = 0x01; // アルバイト
  const REGULAR  = 0x02; // 正社員
  const CONTRACT = 0x03; // 契約社員
}

echo Employee::REGULAR;
