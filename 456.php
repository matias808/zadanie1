<?php
$tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

echo "5. komórka tab1: " . $tab1[4] . "\n";
$tab1[6] = 12;

$tab2 = $tab1;

$tab3 = [];
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

$tab2 = array_reverse($tab1);
