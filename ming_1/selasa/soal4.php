<?php

    //variable a=5 , b=10
    //Jika dua variable sama maka akan muncul angka a,jika tidak munculkan angka terbesar
    $a = 5;
    $b = 10;

    if ($a == $b){
        echo $a;
    } else {
        echo max($a,$b);
    }

?>