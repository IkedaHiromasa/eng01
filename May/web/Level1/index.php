<?php
require_once('Level1.php');

$num = 1;
$q = new Level1();

$time_start = microtime(true);
$q->execute($num);
$time = microtime(true) - $time_start;

echo '<br>';
echo $time. "秒";
