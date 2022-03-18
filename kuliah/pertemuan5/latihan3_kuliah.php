<?php
// studi kasus
$mahasiswa = [
    ["Moch Irfan Ridwanul Hakim", "213040019", "irfan.akim28@gmail.com", "Teknik informatika"],
    ["Barra", "213040017", "barraalkhsy@gmail.com", "Teknik informatika"],
    ["Amin", "213040018", "aminnuloh@gmail.com", "Teknik informatika"]
];


?>

<?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama: <?php echo $mhs[0]?></li>
    <li>NPM: <?php echo $mhs[1]?></li>
    <li>Email: <?php echo $mhs[2]?></li>
    <li>Jurusan: <?php echo $mhs[3]?></li>
  </ul>
<?php } ?>