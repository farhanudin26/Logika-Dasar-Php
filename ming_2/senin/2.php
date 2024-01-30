<?php

    //Buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format "K" untuk ribuan dan "M" untuk jutaan 
    //Misal 9500 menjadi 9,5K atau 1.700.000 menjadi 1,7M

    function formatNumber($number) {
        if ($number >= 1000000) {
        echo ($number/ 1000000) . 'M';//jutaan
        }
        elseif ($number >= 1000) {
        echo ($number/ 1000) . 'K';//ribuan
        }else {
            echo $number;
        }
        return $number;
    }

    formatNumber(9000);
    echo "<br>";
    formatNumber(1700000);



?>