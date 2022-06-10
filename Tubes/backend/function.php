<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_tubes') or die('KONEKSI GAGAL!');

    return $conn;
}


function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


    $rows = []; 
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return  $rows;

}

function tambah($data) {
    $conn = koneksi();

    // cek apakah user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        // beri gambar default
        $gambar = 'Logouser.jpg';
    } else {
        // lakukan fungsi upload
        $gambar = upload();
        //cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }

    // $id_film = htmlspecialchars($data['idfilm']);
    $judul_film = htmlspecialchars($data['judulfilm']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $gendre = htmlspecialchars($data['gendre']);
    $direktur = htmlspecialchars($data['direktur']);
    $penulis = htmlspecialchars($data['penulis']);
    $aktor = htmlspecialchars($data['aktor']);
    // $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO 
                film 
                VALUES 
                (null, '$judul_film', '$sinopsis', '$gendre', '$direktur', '$penulis', '$aktor', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;

    // query mahasiswa berdasarkan id
    $film = query("SELECT * FROM film WHERE id_film = $id")[0];
    //cek jika gambar default
    if($film["gambar"] !== 'Logouser.jpg') {
        // hapus gambar
        unlink('backend/img film' . $film["gambar"]);
    }
    

    mysqli_query($conn, "DELETE FROM film WHERE id_film = '$id'");

    return mysqli_affected_rows($conn);

}

function edit($data) {
    $conn = koneksi();

    $id_film = $data["id"];
    $judul_film = $data['judulfilm'];
    $sinopsis = $data['sinopsis'];
    $gendre = $data['gendre'];
    $direktur = $data['direktur'];
    $penulis = $data['penulis'];
    $aktor = $data['aktor'];
    $gambar = $data['gambar'];
    
    $query = "UPDATE film SET
                id_film = '$id_film',
                judul_film = '$judul_film',
                sinopsis = '$sinopsis',
                gendre = '$gendre',
                direktur = '$direktur',
                penulis = '$penulis',
                aktor = '$aktor',
                gambar = '$gambar'
                WHERE id_film= $id_film
                ";
    // var_dump($query);die;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    // siapkan data gambar 
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];
    
    // cek apakah file bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
                </script>";
        return false;
    }

    // cek jika gambar terlalu besar
    if( $filesize > 5000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
                </script>";
        return false;
    }

    // proses upload gambar
    $newfilename = uniqid() . $filename; 
    move_uploaded_file($filetmpname, './img film/' . $newfilename);

    return $newfilename;
}

function cari($search) {
    $conn = koneksi();

    $query = "SELECT film.*, gendre.nama as nama_gendre FROM film INNER JOIN gendre ON film.gendre=gendre.id
                WHERE
                judul_film LIKE '%$search%' OR
                sinopsis LIKE '%$search%' OR
                gendre LIKE '%$search%' OR
                direktur LIKE '%$search%' OR
                penulis LIKE '%$search%' OR
                aktor LIKE '%$search%'  
                ";

    $data = query($query);

    return $data;
}

function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password' )");
    // var_dump($query);
    return mysqli_affected_rows($conn);
}