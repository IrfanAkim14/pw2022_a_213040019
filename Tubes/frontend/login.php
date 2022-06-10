<?php
session_start();
if( isset($_SESSION["login"]) ) {
    header("Location : index.php");
    exit;
}  

require '../backend/function.php';

if( isset($_POST["login"])) {

    $conn = koneksi();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND role='user'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
		
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            // set session

            $_SESSION["login"] = true;
			$_SESSION['role'] = 'user';
            header("Location: index.php"); 
            exit;
        }
		
    }
}



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../backend/registrasi.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../img/Banner.jpg');">
			<div class="inner">
				<form action="" method="POST">
					<h3>Login User</h3>
                    <?php if( isset($error)) : ?>
                        <p style="color: red; font-style:italic";>Username/password salah</p>
                    <?php endif; ?>    
					<div class="form-group">
						<div class="form-wrapper">
							<label for="username">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input name="username" id="username" type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="password">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input name="password" id="password" type="password" class="form-control col-lg-12" placeholder="********">
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<a href="registrasi.php">Registrasi sekarang you now!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</a>
						</div>
						<div class="button-holder">
							<a href="index.php"><button type="submit" name="login">Login Now</button></a>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>