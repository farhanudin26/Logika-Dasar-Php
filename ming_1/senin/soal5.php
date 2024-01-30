<?php

// terdapat 2 variabel yang menyimpan data angka
$angka1 = 10;
$angka2 = 3;

//apabila hasilnya desimal maka dibulatkan tertampil seperti berikut 10:3 = 3,3333
//dibulatkan menjadi 3

// menghitung hasil pembagian
$hasil = $angka1 / $angka2;

// membulatkan hasil ke bawah
$hasil_bulat = floor($hasil);

// menampilkan hasil
echo "Hasil pembagian: " . $hasil . "<br>";
echo "Hasil pembagian dibulatkan ke bawah: " . $hasil_bulat;

?>
