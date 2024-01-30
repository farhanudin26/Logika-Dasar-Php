<?php

// gabungkan dua array tersebut, lalu untuk nilai yang sama maka akan diambil hanya salah satunya saja, setelah itu tampilkan bilangan secara terurut dari terbesar ke terkecil. Hasil akan berisi angka-angka berikut :
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$gabungan = array_merge($bil1, $bil2);
$unik = array_unique($gabungan);
arsort($unik, SORT_NUMERIC);
array_reverse($unik);

echo implode(", ", $unik);

?>