<?php  
require '../backend/function.php';
$film = query("SELECT * FROM film");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="film.css">
    <title>Daftar Film</title>
</head>
<body>
    <div class="container-fluid set">
      <!--navbar-->
      <nav
      class="navbar navbar-expand-lg navbar-light "
      style="background-color: white"
    >
      <div class="container">
        <a class="navbar-brand" href="#">UNION.ID</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Beranda</a
              >
            </li>
            <li class="nav-item" aria-current="page">
              <a class="nav-link" href="film.html">Daftar Film</a>
            </li>
            <li class="nav-item">
              <a class="btn" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->
    <!--daftar film-->
    <section id="project">
      <div class="container">
        <div class="row text-center">
          <div class="row">
          <?php 
          foreach($film as $row): ?>
          <div class="col-md-4 mb-3 col-12">
              <div class="card-kelas">
                <img src="../backend/img film/<?php echo $row['gambar'] ?>" class="card-img-top" alt="" />
                <div class="card-body-mem">
                  <h5 class="card-text">
                  <?php echo $row['judul_film'] ?>
                </h5>
                
                <button type="button" class="btn btn-register">
                  Selengkapnya
                </button>
                </div>
               
              </div>
            </div>
            <?php endforeach; ?>
            
      </div>
    </div>
  </div>
      <!--akhir daftar film-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>