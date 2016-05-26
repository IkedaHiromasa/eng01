<?php

/**
 * 問題：Level2　金種計算
 */
class Level2
{
    public function execute($money) {

        $yen = array(
            10000,
            5000,
            2000,
            1000,
            500,
            100,
            50,
            10,
            5,
            1,
        );
        
        $i = 0;
        do {
            $money = $this->calculate($money, $yen[$i]);
            $i++;
        } while ($money != 0);
    }

    private function calculate($target, $num) {
        if(floor($target % $num) === 0) {
            return $target;
        }
        echo $num . '円：' . floor($target / $num) . '枚<br>';
        return $target % $num;
    }
}
