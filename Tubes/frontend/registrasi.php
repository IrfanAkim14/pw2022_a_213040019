<?php 
require '../backend/function.php';

if ( isset($_POST["register"])) {

    if( registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="registrasi.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('../img/Banner.jpg');">
			<div class="inner">
				<form action="" method="POST">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="username">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input name="username" id="username" type="text" class="form-control">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="email">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;"></i>
								<input name="email" id="email" type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="password">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input name="password" id="password" type="password" class="form-control" placeholder="********">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="password2">Repeat Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input name="password2" id="password2" type="password" class="form-control" placeholder="********">
							</div>
						</div>
					</div>
					<div class="form-end">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="button-holder">
							<button type="submit" name="register">Register Now</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>