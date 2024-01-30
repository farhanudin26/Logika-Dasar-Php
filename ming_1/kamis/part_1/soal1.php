<?php

// Waktu tidur yang baik untuk anak usia 6-12 tahun adalah 10 jam. untuk usia 12-18 adalah 8-9 jam.
// apabila seseorang berusia 17 tahun berapa waktu tidur yang baik?

    $usia = 17;
    $waktuTidur = "";

    if ($usia >= 6 && $usia < 12) {
        $waktuTidur = "10 jam";
    } elseif ($usia >= 12 && $usia < 18) {
        $waktuTidur = "8-9 jam";
    } else {
        $waktuTidur = "Usia belum tau heheh";
    }

    echo "Waktu tidur yang baik untuk usia " . $usia . " tahun adalah " . $waktuTidur;
    ?>
