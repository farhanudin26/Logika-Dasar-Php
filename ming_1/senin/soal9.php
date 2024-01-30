<?php
// Inisialisasi variabel
$a = 3;

// 1. Bilangan Positif atau Bilangan Negatif
if ($a < 0) {
    echo "Variabel $a adalah bilangan negatif.<br>";
} elseif ($a > 0) {
    echo "Variabel $a adalah bilangan positif.<br>";
} else {
    echo "Variabel $a adalah bilangan nol.<br>";
}

// 2. Bilangan Cacah
if ($a >= 0) {
    echo "Variabel $a adalah bilangan cacah.<br>";
} else {
    echo "Variabel $a bukan merupakan bilangan cacah.<br>";
}

// 3. Kelipatan 3
if ($a % 3 == 0) {
    echo "Variabel $a adalah kelipatan 3.<br>";
} else {
    echo "Variabel $a bukan merupakan kelipatan 3.<br>";
}
?>