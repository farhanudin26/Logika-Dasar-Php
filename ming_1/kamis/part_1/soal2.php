<?php

    //Setiap orang memiliki IMT dan kategorr IMT nya masing masing berikut kategori IMT :
    //- Kurang dari 18.5 : berat badan kurang
    //- dari 18.5 sampai kurang dari 22.9 : normal
    //- dari 22.9 sampai kurang dari 24.9 : berat badan lebih
    //- lebih dari dan sama dengan 25  : obesitas 

    //Jika beni memiliki berat badan 45 kg dangan tinggi badan 148 cm ,termasuk ktgr apa?

    $berat = 45;
    $tinggi = 148;

    //bagi 100
    $bagi = $tinggi/100;

    $imt = ($berat/($bagi*$bagi));

    if ($imt <= 18.5){
        $kategori = "kurang";
    } else if(($imt >= 18.5) && ($imt <= 22.9)){
        $kategori = "normal";
    }else if(($imt >= 22.9) && ($imt <= 24.9)){
        $kategori = "berat badan lebih";
    }else if($imt >= 25){
        $kategori = "obesitas";
    }

    echo "Jadi IMT beni adalah  " . round($imt,2) . " dan kategorinya " . $kategori;
?>