<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya dalah index, yang dimulai dari 0

// membuat Array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan, false"];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo$arr1[0];
// echo "<br>";
// echo $bulan[1];
// echo "<br>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);


?>