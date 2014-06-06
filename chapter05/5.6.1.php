<?php

$a = 10;
echo $a, PHP_EOL;
$b =& $a;
echo $b, PHP_EOL;
$c = $a;
echo $c, PHP_EOL;

$b = 20;
echo $b, PHP_EOL;
