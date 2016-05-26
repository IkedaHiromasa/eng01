<?php
require_once('Level3.php');

$ip = array(
    '1.2.3.4',
    '100.400.0.0',
    '100.23.103.20',
    '123.11.22.33..',
    '192.16.8.0.4'
);

$q = new Level3();

$time_start = microtime(true);
$q->execute($ip);
$time = microtime(true) - $time_start;

echo '<br>';
echo $time. "秒";
