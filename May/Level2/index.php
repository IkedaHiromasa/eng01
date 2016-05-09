<?php
require_once('Level2.php');

$money = 88888;
$q = new Level2();

$time_start = microtime(true);
$q->execute($money);
$time = microtime(true) - $time_start;

echo '<br>';
echo $time. "秒";
