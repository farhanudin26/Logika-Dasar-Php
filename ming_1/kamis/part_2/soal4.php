<?php

    //persentase kehadiran setiap siswa dalam satu bulan adalah 100%
    //sakit dan izin berkurang 3%, alfa berkurang 5%, hadir ga berkurang
    
        $stuasi= 100;

        $presentase = ($stuasi == 'sakit' || $stuasi == 'izin') ? 100 - 3 :
                    (($stuasi == 'alfa') ? 100 - 5 : 100);
                    echo $presentase;
        ?>