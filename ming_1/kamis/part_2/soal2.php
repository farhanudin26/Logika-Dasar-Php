<?php

    //jika hari ini adalah hari senin maka hari ni upacara jika bukan senin maka tidak upacara

    $hari = date('l');

    $pesan = ($hari == 'Thursday') ? 'Hari ini upacara' : 'Hari ini tidak upacara';

    echo $pesan;

?>