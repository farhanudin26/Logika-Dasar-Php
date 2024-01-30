<?php

    //buatlah sebuah fungsi yang akan membangdingkan dua buah string nama. lalu, menampilkan jumlah karakter dari dua nama tersebut
    //dan menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya

    function pembandingNama($nama1, $nama2) {
        // menghitung jumlah string dari dua nama
        $string1 = strlen(str_replace(' ', '', $nama1));
        $string2 = strlen(str_replace(' ', '', $nama2));
    
        // menampilkan jumlah karakter dari dua nama
        echo "Jumlah karakter dari nama " . $nama1 . " : " . $string1 . "<br>";
        echo "Jumlah karakter dari nama " . $nama2 . " : " . $string2 . "<br>";
    
        // menentukan nama string paling banyak
        if ($string1 > $string2) {
            $namaTerpanjang = $nama1;
            $selisih = $string1 - $string2;
        } elseif ($string1 < $string2) {
            $namaTerpanjang = $nama2;
            $selisih = $string2 - $string1;
        } else {
            echo "Kedua nama memiliki jumlah karakter yang sama.";
            return;
        }
    
        // menampilkan nama yang memiliki jumlah karakter lebih banyak serta selisihnya
        echo "Nama yang memiliki jumlah karakter paling banyak adalah : " . $namaTerpanjang . "<br>";
        echo "dan Selisih jumlah karakternya adalah : " . $selisih . "<br>";
    }
    
    pembandingNama("Muhammad Awal", "Siti akhir");