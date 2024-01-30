<?php 

    //predikat terhadap hasil ujian diberikan ketika mendapat predikat a jika nilai lebih dari 90 
    //predikat b jika lebih dari 75 selain itu c


    $nilai = 85;

    $predikat = ($nilai >= 90) ? 'A':
    (($nilai >= 75) ? 'B' : 'C');

    echo "Predikat: $predikat";
?>