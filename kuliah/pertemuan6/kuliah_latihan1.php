<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "Moch Irfan Ridwanul Hakim",
        "npm" => "213040019",
        "email" => "irfan.akim28@gmail.com",
        "jurusan" => "Teknik informatika"],
    [
        "nama" => "Barra", 
        "npm" => "213040017", 
        "email" => "barraalkhsy@gmail.com", 
        "jurusan" => "Teknik informatika"],
    [
        "nama" => "Amin", 
        "npm" => "213040018", 
        "email" => "aminnuloh@gmail.com", 
        "jurusan" => "Teknik informatika"],
    [
        "nama" => "Anggoro Ari", 
        "email" => "anggoro@yahoo.com", 
        "jurusan" => "Teknik Industri", 
        "npm" => "213040054"]
];
// var_dump($mahasiswa[2]["email"]);

?>

<?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama: <?php echo $mhs["nama"]?></li>
    <li>NPM: <?php echo $mhs["npm"]?></li>
    <li>Email: <?php echo $mhs["email"]?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
  </ul>
<?php } ?>