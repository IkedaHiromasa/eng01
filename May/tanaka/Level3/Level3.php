<?php

/**
 * 問題：Level3　IPアドレスのValidation
 */
class Level3
{
    function execute($ips) {
        foreach ($ips as $value) {
            $nums = split("\.", $value);
            if (count($nums) != 4) {
                echo 'False<br>';
                continue;
            }
            foreach ($nums as $num) {
                if ($num < 0 || $num > 255) {
                    echo 'False<br>';
                    continue 2;
                }
            }
            echo 'True<br>';
        }
    }
}
