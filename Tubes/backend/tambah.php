<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("Location : login.php");
    exit;
}
 
require 'function.php';
    // ketika tombol tambah di klik
    if(isset($_POST["tambah"])) {
        // jalankan fungsi tambah()
        if(tambah($_POST) > 0) {
            echo "<script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                    </script>";
        }
    }

    $gendre = query("SELECT * FROM gendre");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Tambah Daftar Film</title>
    
  </head>
  <body>
    
    <div class="container">
        <h1 style="font-family:'Courier New', Courier, monospace; font-size:45px">Form Penambahan Daftar Film</h1>

        <a href="index.php" class="btn btn-primary">Kembali Ke Daftar Film</a>

        <div class="row">
            <div class="col-8">
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="mb3">
                        <label for="judulfilm" class="form-label">Judul Film</label>
                        <input type="text" class="form-control" id="judulfilm" name="judulfilm" required>
                    </div>

                    <div class="mb3">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <input type="text" class="form-control" id="sinopsis" name="sinopsis" required>
                    </div>

                    <div class="mb3">
                        <label for="gendre" class="form-label">Gendre</label>
                        <select class="form-select" name="gendre" aria-label="Default select example">
                        <option selected>Pilih gendre</option>
                        <?php foreach($gendre as $item): ?>
                        <option value="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb3">
                        <label for="direktur" class="form-label">Direktur</label>
                        <input type="text" class="form-control" id="direktur" name="direktur" required>
                    </div>

                    <div class="mb3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>

                    <div class="mb3">
                        <label for="aktor" class="form-label">Aktor</label>
                        <input type="text" class="form-control" id="aktor" name="aktor">
                    </div>

                    <div class="mb3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>



                    <button type="submit" class="btn btn-primary" name="tambah" mb-3 style="margin-top: 20px;">Tambah Daftar Film</button>
                </form>
            </div>
        </div>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>