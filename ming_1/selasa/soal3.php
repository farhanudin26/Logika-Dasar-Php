<?php

    // Mini market eko menjual berbagai kebutuhan
    //setiap pelanggan belanja lebih dari 100k akan mendapatkan diskon 10k
    //Jika andi belanja sebesar 180k apa yang akan di dapatkan oleh andi

    $total_belanja = 180000;
    $diskon = 0;

    if  ($total_belanja > 100000){
        $diskon = 10000;
    }

    $total_bayar = $total_belanja - $diskon;
    echo "Total yang harus dibayar oleh Andi adalah: " . $total_bayar;

?>