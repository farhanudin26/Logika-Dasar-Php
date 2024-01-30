<?php

//Rumah Makan Beni mngadakan program diskon sebesar 5% tiap pembelian haris selasa.
//Dan setiap pembelian diatas 100k mendapatkan diskon 7%.

//Hitunglah uang yang harus dibayar jika total pembelian 130k di hari ini

// Total pembelian
$totalPembelian = 100000;

// Hari pembelian nya isi hari apa
$hariPembelian = "Selasa";

// Inisialisasi diskon
$diskon1 = 0.05; 
$diskon2 = 0.07; 

// Inisialisasi batas pembelian untuk diskon kedua
$batasDiskon2 = 100000;

// Inisialisasi variabel diskon
$diskon = 0;

// Cek apakah hari pembelian adalah Selasa
if ($hariPembelian == "Selasa") {
    $diskon += $diskon1;
}

// Cek apakah total pembelian melebihi batas untuk diskon kedua
if ($totalPembelian > $batasDiskon2) {
    $diskon += $diskon2;
}

// Hitung jumlah diskon
$jumlahDiskon = $totalPembelian * $diskon;

// Hitung jumlah yang harus dibayar setelah diskon
$totalBayar = $totalPembelian - $jumlahDiskon;

// Tampilkan hasil
echo "Total pembelian: Rp $totalPembelian";
echo "<br>";

 
// Cek apakah hari pembelian adalah Selasa untuk menampilkan informasi diskon
if ($hariPembelian == "Selasa") {
    echo "Hari ini hari selasa anda mendapat potongan harga sebesar: Rp $jumlahDiskon";
    echo "<br>";
} else {
    echo "Hari ini bukan hari Selasa, jadi hanya mendapatkan potongan harga sebesar: Rp $jumlahDiskon" ;
    echo "<br>";
}

echo "Total yang harus dibayar: Rp $totalBayar ";

?>
