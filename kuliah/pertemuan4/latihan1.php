<?php
// FUNGCTION

// built-in Function
// date();
echo date("l, j F Y");

// time
echo time ();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() + 60 * 60 *24 * 100);
echo "<hr>";
// mktime(0,0,0,0,0,0);
// mendapatkan detik pada tanggal tertentu
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,6,12,2003));
echo "<hr>";

// Math
echo pow(2,3); // pangkat
echo "<br>";
echo rand(1,10);
echo "<br>";
// pembulatan 
// round(), ceil(), floor();
echo round(2.9); // terdekat
echo "<br>";
echo ceil(2.1); // ke atas (celling / langit2)
echo "<br>";
echo floor(2.9); // ke bawah (lantai)




?>