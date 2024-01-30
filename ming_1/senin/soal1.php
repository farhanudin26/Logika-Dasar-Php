<?php

$angka = 22;

if (is_int($angka)) {
    echo $angka . " merupakan bilangan";
}else if (is_string($angka)) {
    echo '" ' . $angka . '" merupakan text';
}


// = : memberikan nilai pada variabel
// == : membandingkan dua nilai
// === : membandingkan dua nilai, mengecek tipe data


?>