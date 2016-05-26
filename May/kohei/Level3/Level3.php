<?php

/**
 * 問題：Level3　IPアドレスのValidation
 */
class Level3
{
    function execute($ips) {
        # ここに回答を書いてください。
        echo '回答: <br>';
        #if ( preg_match('正規表現',$ips) ) {
        if ($ips != null || $ips != '') {
            echo 'true';
        }else{
            echo 'false';
        }
    }
}
