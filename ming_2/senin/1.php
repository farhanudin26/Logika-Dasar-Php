<?php 

    //buatlah sebuah function yg akan menampilkan hari tanggal dengan format (senin, 22 januari 2024)hari menggunakan bahasa indonesia
    //argument diambil dari variable berikut

    $date = date('l, d M Y');
    function formatIDN($date) {
    $hariIDN = ['Monday' => 'Senin', 'Tuesday' => 'Selasa', 'Wednesday' => 'Rabu', 'Thursday' => 'Kamis',
                    'Friday' => 'Jumat', 'Saturday' => 'Sabtu', 'Sunday' => 'Minggu'];
     echo strtr(date('l, d M Y', strtotime($date)), $hariIDN);
    }

    $date = date('l, d M Y');
    echo $date;
    echo " vs ";
    formatIDN($date);


?>