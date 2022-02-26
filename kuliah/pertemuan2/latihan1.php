<?php
    // Pertemuan 2 , membahas mengenai sintaks PHP 
    // Nilai: integer, string, boolean
    echo 10;
    echo "<hr>";


    //  Variabel $ 
    //  Wadah untuk menyimpan NILAI
    // Aturan variabel , namannya bebas, tidak boleh diawali angka dan tidak boleh ada spasi 
    $nama = 'Moch Irfan Ridwanul Hakim';
    echo $nama;
    echo "<br>";
    // bisa ditimpa / overwrite
    $nama = 'Akim';
    echo $nama;
    echo "<hr>";

    // String
    // '', ""
    echo "Jum'at";
    echo "<br>";
    echo 'Akim : " Hallo, Semuanya!"';
    // Escaped character
    // \
    echo "<br>";
    echo 'Irfan : "Jum\'at"';
    echo "<br>";
    echo "Irfan : \"Jum'at\"";
    echo "<br>";
    
    // Interpolasi
    // Mencetak isi Variabel
    // hanya bisa digunakan oleh ""
    echo "Halo nama saya $nama";
    echo "<br>";
    $price = 200;
    echo "price: $$price";
    echo "<hr>";


    // OPERATOR
    // Aritmatika 
    // +, -, *, /, % (modulo / modulus / sisa bagi)
    echo 1 + 2 * 3 - 4; //KaBaTaKu kabagitambahkurang
    echo "<br>";
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2;
    echo $luas_segi_tiga;
    echo "<br>";
    echo 5 % 2;

    // Concat
    // penggabung String
    // simbolnya .
    $nama_depan = 'Moch Irfan';
    $nama_belakang = 'Ridwanul Hakim';
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    // Perbandingan
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";
    echo "<hr>";

    // Identitas / strict comparison
    //  ===, !==

    echo 10 === "10";
    echo "<hr>";

    // Increment / Decrement
    // Penambahan / Pengurangan 1
    // ++, --
    $x = 10;
    $x++;
    echo $x;
?>