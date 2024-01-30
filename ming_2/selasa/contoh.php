<?php

    // $teks = "Selamat pagi";
    // echo str_replace(" ", "", $teks);
    // echo "<br>";

    // $nama = ['a ', 'u'];
    // echo implode(" & ", $nama);

    $data = [80, 80, 75, 100, 85, 100, 66];

    function searchNumber ($angkaYangDicari, ...$data) {
    $jumlah = 0;    
    foreach ($data as $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1;
        }
    }

    return $jumlah;
}
    $angkaYangDicari = 100;
    echo "Jumlah angka $angkaYangDicari = " .  searchNumber($angkaYangDicari, 100,20,40,80,100);
    echo "<br>";
    $angkaYangDicari = 80;
    echo "Jumlah angka $angkaYangDicari = " .  searchNumber($angkaYangDicari, 100,20,40,80,100);
    
?>