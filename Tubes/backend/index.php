<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location : login.php");
    exit;
}
if( isset($_SESSION["role"]) && $_SESSION["role"] == 'user') {
    header("Location : ../backend/index.php");
    exit;
}

require 'function.php';
$film = query("SELECT film.*, gendre.nama as nama_gendre FROM film INNER JOIN gendre ON film.gendre=gendre.id");

// tombol search

if(isset($_POST["cari"]) ) {
    $film = cari($_POST["search"]);
}
$no=1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="index.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="tab-name">
            <h1>UNION.ID</h1>
        </div>
        <ul>
            <li><a href="index.php"><span>Daftar Film</span></a> </li>
            <li><a href="logout.php"><span>Log out</span></a> </li>
            
            
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <form action="" method="post">
                    <div class="search">
                        <input type="text" placeholder="Search.." id="keyword" name="search" autofocus autocomplete="off">
                        <button type="submit" name="cari" id="tombol-cari"><img src="../img/search.png" alt=""></button>
                    </div>
                </form>
                <div class="user">
                    <a href="tambah.php" class="btn">Add New</a>
                    <div class="img-case">
                        <img src="../img/Logouser.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2" >
                <div class="daftar-film" id="container">
                    <div class="title">
                        <h2>Daftar Film</h2>
    
                    </div>
                    <table>
                        <tr>
                            <th>Id Film</th>
                            <th>Judul Film</th>
                            <th>Sinopsis</th>
                            <th>Gendre</th>
                            <th>Direktur</th>
                            <th>Penulis</th>
                            <th>Aktor</th>
                            <th>Gambar</th>
                        </tr>
                        <?php  
                        $no=1;
                        foreach ($film as $row) {
                        ?>
                        <tr> 
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['judul_film'] ?></td>
                            <td><?php echo $row['sinopsis'] ?></td>
                            <td><?php echo $row['nama_gendre'] ?></td>
                            <td><?php echo $row['direktur'] ?></td>
                            <td><?php echo $row['penulis'] ?></td>
                            <td><?php echo $row['aktor'] ?></td>
                            <td>
                                <img src="./img film/<?php echo $row['gambar'] ?> " width="50">
                            </td>
                            <td>
                                <div style="display: inline;">
                                    
                                    <a href="edit.php?id=<?php echo $row['id_film'] ?>" class="btn" >edit</a>
                                    <br>
                                    <br>
                                    <a href="delete.php?id=<?php echo $row['id_film'] ?> " onclick="return confirm('Yakin');" class="btn">delete</a>
                                </div>
                            </td>
                        </tr>  
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    // ambil elemen2 yang dibutuhkan
    var keyword = document.getElementById('keyword');
    var tombolCari = document.getElementById('tombol-cari');
    var container = document.getElementById('container');

    // tambahkan event ketika keyword ditulis
    keyword.addEventListener('keyup', function() {

        // buat object ajax
        var xhr = new XMLHttpRequest();

        // cek kesiapan ajax
        xhr.onreadystatechange = function() {
            if( xhr.readyState == 4 && xhr.status == 200 ) {
                container.innerHTML = xhr.responseText;
            }
        }

        // eksekusi ajax
        xhr.open('GET', 'ajax/index.php?keyword=' + keyword.value, true);
        xhr.send();

    });
</script>