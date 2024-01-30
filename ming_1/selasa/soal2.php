<?php

    //syarat untuk mendaftar dengan syarat selanjutnya

    //Nilai minimum sebagai berikut :
    //MTK = 87 , INGGRIS = 85 , INDONESIA = 87
    //Minimum rata rata nilai adalah 85

    //jika minimum mata pelajaran dan rata rata terpenuhi maka peserta diterima

    // Nilai minimum
    $nilai_mtk = 87;
    $nilai_inggris = 85;
    $nilai_indonesia = 87;
    $nilai_minimum = 85;

    // Nilai peserta bisa diganti
    $nilai_mtk_peserta = 10;
    $nilai_inggris_peserta = 12;
    $nilai_indonesia_peserta = 13;

    // Menghitung rata-rata nilai peserta
    $rata_rata_peserta = ($nilai_mtk_peserta + $nilai_inggris_peserta + $nilai_indonesia_peserta) / 3;

    // Memeriksa syarat pendaftaran
    if ($nilai_mtk_peserta >= $nilai_mtk && $nilai_inggris_peserta >= $nilai_inggris && $nilai_indonesia_peserta >= $nilai_indonesia && $rata_rata_peserta >= $nilai_minimum) {
        echo "peserta diterima!";
    } else {
        echo "Maaf, peserta tidak diterima";
    }
    ?>