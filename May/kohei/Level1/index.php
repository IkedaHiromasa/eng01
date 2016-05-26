<?php
require_once('Level1.php');
$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;
$num6 = 6;
$q = new Level1();
$time_start = microtime(true);
$q->execute($num1);
$q->execute($num2);
$q->execute($num3);
$q->execute($num4);
$q->execute($num5);
$q->execute($num6);
$time = microtime(true) - $time_start;
echo '<br>';
echo $time. "秒";