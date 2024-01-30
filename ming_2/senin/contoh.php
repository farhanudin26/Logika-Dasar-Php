<?php

    function biodata($nama, $jurusan = NULL) {
        echo "Hallo, $nama! anda diterima sebagai siwa jurusan $jurusan";
    }

    biodata("putri");
    echo"<br>";
    biodata("putra", "TJKT");
    echo"<br>";
    biodata("putra","DKV", 11);
    echo"<br>";
    echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------";
    echo"<br>";


    function perkalianLima(&$angka) {
        echo $angka *= 5;
    }
    $no = 2;
    perkalianLima($no);
    echo $no;

?>