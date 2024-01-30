<?php 

    //terdapat sebuah variabel yang menyimpan data tahun
    $year = 2023;

    //jika tahun merupakan kelipatan 4 , maka akan menampilkan
    //tahun 2024, bulan february sampai dengan tanggal 29
    //selain itu akan menampilkan tahun 2023 , bulan february sampai dengan tanggal 28

    if ($year % 4 == 0){
        echo "tahun $year , bulan february sampai dengan tanggal 29";
    } else {
        echo "tahun $year , bulan february sampai dengan tanggal 28";
    }

?>