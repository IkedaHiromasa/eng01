<?php
require_once('Level1.php');

$num = 4;
$q = new Level1();

$time_start = microtime(true);
for($i = 0; $i < 100000; $i++){
    $q->execute($num);
}
$time = microtime(true) - $time_start;

echo '<br>';
echo $time. "秒";
