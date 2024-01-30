<?php

// Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang sama antara kedua variabel.
// Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat disalah satu variabel saja)

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$group1 = array_intersect($bil1, $bil2); // membandinkan antara kedua variabel
$group2 = array_diff($bil1, $bil2); // bilangan selain itu

echo "bilangan yang sama antara keduanya adalah  ";
echo implode("\n", $group1);
echo "<br>";
echo "bilangan yang tidak sama adalah  ";
echo implode("\n", $group2);


?>