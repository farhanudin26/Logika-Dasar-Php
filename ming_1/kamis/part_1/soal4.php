<?php 

//Dani ingin membangun rumah disuatu komplek perumahan dengan panjang tanah 13 meter dan lebar tanah 9 meter.
//Tetapi sebelum membangun rumah, dani harus memberikan laporan terlebih dahulu tipe rumah yang ingin dia buat
// kepada kontraktor bangunan. dengan luas tanah yang dia punya ,mesuk kemanakah kategori rumah dani nantinya

//- tipe 36 : <90 m2 | -tipe 45 : 90 - 96 m2 | -tipe 54 : 96 - 120 m2 | -tipe 60 : 120 - 150 m2 | -tipe70 : 150>m2

$Panjang = 13;
$Lebar = 9;

//kali
$hasil = $Panjang * $Lebar;

if ($hasil <= 90){
    $kategori = "tipe 36";
} else if(($hasil >= 90) && ($hasil <= 96)){
    $kategori = "tipe 45";
}else if(($hasil >= 96) && ($hasil <= 120)){
    $kategori = "tipe 54";
}else if(($hasil >= 120) && ($hasil <= 150)){
    $kategori = "tipe 60";
}else if ($hasil >= 150){
    $kategori = "tipe 70";
} 

echo "Jadi luas tanah Dani adalah   " . $hasil . " meter dan kategorinya " . $kategori;