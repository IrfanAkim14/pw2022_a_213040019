<?php
// membuat fungsi / definisi fungsi
function total_luas_dua_kubus($a, $b) {
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;

    $total = $luas_a + $luas_b;

    return "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}

echo total_luas_dua_kubus(9,4);
echo "<br>";
echo total_luas_dua_kubus(10,15);
echo "<br>";
echo total_luas_dua_kubus(14,6);

?>