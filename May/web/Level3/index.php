<?php
require_once('Level3.php');

$ip = array(
    '1.2.3.4',
    '100.400.0.0'
);
}
$q = new Level3();

$time_start = microtime(true);
$q->execute($ip);
$time = microtime(true) - $time_start;

echo '<br>';
echo $time. "秒";
