<?php

//Menu dirumah makan Beni 
//- Nasi goreng = 15k
//- ayam bakar = 20k
//- Nasi kebuli = 25k
//- aneka jus = 8k
//- Es teh Manis = 3k, - es jeruk = 5k


//Rumah makan beni mengadakan program jumat berkah dengan memberikan diskon 5% dihari jumat dan 2% di hari senin.
//hitunglah harga yang harus dibayar jika dani ingin membeli 2 nasi kebuli, 1 ayam bakar,  2 nasi goreng \
//(gunakan hari secara otomatis dari hari ini)



// Menu di rumah makan Beni
$menu = [
    'Nasi goreng' => 15000,
    'Ayam bakar' => 20000,
    'Nasi kebuli' => 25000,
    'Aneka jus' => 8000,
    'Es teh Manis' => 3000,
    'Es jeruk' => 5000
];

// Pesanan Dani
$pesanan = [
    'Nasi kebuli' => 2,
    'Ayam bakar' => 1,
    'Nasi goreng' => 2
];

// Tentukan hari ini menggunakan angka
$hari_ini = date('1'); // 

// Tentukan diskon berdasarkan hari
if ($hari_ini == 5) { 
    $diskon = 5;
} elseif ($hari_ini == 1) { 
    $diskon = 2;
} else {
    $diskon = 0; // 
}

// Hitung harga total sebelum diskon
$total_sebelum_diskon = 0;

foreach ($pesanan as $menu_pesanan => $jumlah) {
    if (isset($menu[$menu_pesanan])) {
        $total_sebelum_diskon += $menu[$menu_pesanan] * $jumlah;
    }
}

// Hitung total diskon
$total_diskon = $total_sebelum_diskon * ($diskon / 100);

// Hitung total harga setelah diskon
$total_setelah_diskon = $total_sebelum_diskon - $total_diskon;

// Output hasil
echo "Total Belanja : Rp " . $total_sebelum_diskon ;
echo "<br>";
echo "Diskon (" . ($hari_ini == 5 ? 'Jumat' : ($hari_ini == 1 ? 'Senin' : 'Hari lainnya')) . "): " . $diskon . "%";
echo "<br>";
echo "Potongan harga: " . $total_diskon ;
echo "<br>";
echo "Total harga setelah diskon: " . $total_setelah_diskon ;

?>


