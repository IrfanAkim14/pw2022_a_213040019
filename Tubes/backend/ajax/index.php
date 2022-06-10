<?php 
    require '../function.php';

    $keyword = $_GET["keyword"];

    $query = "SELECT film.*, gendre.nama as nama_gendre FROM film INNER JOIN gendre ON film.gendre=gendre.id
                WHERE judul_film LIKE '%$keyword%' AND film.gendre=gendre.id";
    // $query = "SELECT * FROM film, gendre WHERE judul_film LIKE '%$keyword%' OR sinopsis LIKE '%$keyword%' OR direktur LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR aktor LIKE '%$keyword%' AND film.gendre=gendre.id";
    $film = query($query);
    // var_dump($a);
?>
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
                            <td><?php echo $row['id_film'] ?></td>
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
                                    
                                    <a href="edit.php?id=<?php echo $row['id_film'] ?>"  class="btn" >edit</a>
                                    <br>
                                    <br>
                                    <a href="delete.php?id=<?php echo $row['id_film'] ?> " onclick="return confirm('Yakin');" class="btn">delete</a>
                                </div>
                            </td>
                        </tr>  
                        <?php } ?>
                    </table>