<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("Location : login.php");
    exit;
}
 
require 'function.php';

$conn = mysqli_connect('localhost', 'root', '', 'pw2022_tubes') ;

$id = $_GET['id'];

if ( delete($id) > 0) {
    echo "
        <script>
            alert('data berhasil di delete!');
            document.location.href = 'index.php';
            </script>
            ";
} else {
    echo "
    <script>
            alert('data berhasil di delete!');
            document.location.href = 'index.php';
            </script>
            ";
}


?>