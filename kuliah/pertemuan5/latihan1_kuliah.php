<?php
//ARRAY
// Array adalah variabel yang dapat menampung lebih dari satu nilai sekaligus

// 

// membuat array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"]; // cara baru
$bulan = array("Januari", "Februari", "Maret", "April", "Mei",); //cara lama
$myArray = [100, "Irfan", true];

// Mencetak Array
// mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
echo $hari[1];
echo "<br";
echo $bulan[2];
echo "<hr>";

// mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
} 

echo "<hr>";

// memanipulasi isi array
// menambah elemen babru di akhir array
$hari[] = "sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);




?>