<?php

// Dari data berikut, tampilkan nama dan dari data tahun tersebut tentukan apakah nama tersebut lahir ditahun kabisat atau bukan. Contoh :
// 1. Andi : lahir pada tahun kabisat (2008)
// 2. Beni : lahir bukan pada tahun kabisat (2001)

$data = [
[
    'nama' => 'Andi',
    'tahun' => 2008,
],
[
    'nama' => 'Beni',
    'tahun' => 2001,
],
[
    'nama' => 'Dani',
    'tahun' => 2004,
],
[
    'nama' => 'Eko',
    'tahun' => 2006,
]
];

foreach ($data as $key ) {
    $nama = $key ['nama'];
    $tahun = $key ['tahun'];

    if (($tahun % 4 == 0 && $tahun % 100 !=0) || ($tahun % 400 == 0)){
        echo $nama . " lahir pada tahun kabisat (" . $tahun . ")" . "<br>";
    } else {
        echo $nama . " lahir (" . $tahun .  ") bukan pada tahun kabisat". "<br>";
    }
}


?>