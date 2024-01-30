<?php

    //ubah pukul 19.00 jadi pukul 7pm dan ubah pukul 23.45 jadi pukul 11.45pm, pukul 8.55 jadi 8.55 am

    // $waktu = "19.10";

    // $jam = substr($waktu, 0,2);
    // $menit = substr($waktu, 3,2);

    // $jamp = ($jam < 12) ? 'AM' : 'PM';

    // $jam = ($jam > 12) ? $jam - 12 : $jam;

    // $hasil = "$jam:$menit $jamp";

    // echo $hasil;


    $wakt1 = 13.55;
    echo ($wakt1 > 12) ? "mengubah waktu manjadi " . $wakt1 = $wakt1 - 12.00 . " pm" : "mengubah waktu menjadi " . $wakt1 . "am";

?>