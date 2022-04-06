<?php 
    $mahasiswa = [
        [
            "nama" => "Moch Irfan Ridwanul Hakim",
            "npm" => "213040019",
            "email" => "irfan.akim28@gmail.com",
            "jurusan" => "Teknik informatika",
            "gambar" => "mikasa.JPG.jfif"],
        [
            "nama" => "Barra Kutrak", 
            "npm" => "213040017", 
            "email" => "barraakutrak@gmail.com", 
            "jurusan" => "Teknik informatika",
            "gambar" => "bumi.png"],
        
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>  
        <li>
            <a href="latihan2.php?nama= <?= $mhs["nama"]; ?>&nrp= <?= $mhs["npm"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?= $mhs["jurusan"]; ?>&gambar= <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
<?php endforeach; ?>
</ul>    
</body>
</html>