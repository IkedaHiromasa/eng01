<?php
/**
 * 問題：Level2　金種計算
 */
class Level2
{
    function execute($money) {
        # ここに回答を書いてください。
        $cnt = strlen($money);
        $ans5 = array('10000'=>'0','5000'=>'0'
            ,'2000'=>'0','1000'=>'0'
            ,'500'=>'0','100'=>'0'
            ,'50'=>'0','10'=>'0'
            ,'5'=>'0','1'=>'0');

        switch($cnt) {
            case 0:
                #break;
            case 1:
                #$ans = $this->FromYukichi($money, $ans1);
                #break;
            case 2:
                #$ans = $this->FromYukichi($money, $ans2);
                #break;
            case 3:
                #$ans = $this->FromYukichi($money, $ans3);
                #break;
            case 4:
                #$ans = $this->FromYukichi($money, $ans4);
                #break;
            default:
                $ans = $this->FromYukichi($money, $ans5);
            }
        echo "回答: <br>";
        foreach ($ans as $key => $value) {
            echo "$key 円： $value 枚 <br>";
        }
    }

    function FromYukichi($money, $ans) {
        foreach ($ans as $key => $value) {
            $res = $money / $key;
            $ans[$key] = (int)$res;
            $money = $money % $key;
        }
        return $ans;
    }
}