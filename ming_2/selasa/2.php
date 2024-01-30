<?php

    //Buatlah sebuah fungsi yang akan menghitung lembar uang rupiah. contoh : 140500
    //lembar rupiah : 
    // - Rp. 100.000 
    // - Rp. 20.000
    // - Rp. 500

    function rupiah($number) {
        $nominal = [100000,20000, 500];
        $hasil = [];
    
        foreach ($nominal as $note) {
            $count = floor($number / $note);
            if ($count > 0) {
                $hasil[] = [
                    'note' => $note,
                    'count' => $count
                ];
                $number -= $count * $note;
            }
        }
    
        return $hasil;
    }
    
    $hasil = rupiah(140500);
    
    foreach ($hasil as $item) {
        echo "Rp. " . number_format($item['note'], 0, '.', '.') . " x " . $item['count'] ." " . "<br>" .  "\n";
    }
?>