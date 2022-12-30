<?php
	session_start();
	include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="page-login">

		<div class="box box-login">
			
			<div class="box-header center">
				Login
			</div>

			<div class="box-body">

				<?php 

					if(isset($_GET['msg'])){
						echo $_GET['msg'];
					}

				?>

				<form action="" method="POST">
					
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" placeholder="Username" class="input-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" placeholder="Password" class="input-control">
					</div>

					<input type="submit" name="submit" value="Login" class="butt">

				</form>
				
				<?php

					if(isset($_POST['submit'])){

						$user = mysqli_real_escape_string($conn, $_POST['user']);
						$pass = mysqli_real_escape_string($conn, $_POST['pass']);

						$data = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
						if(mysqli_num_rows($data) > 0){

							$db = mysqli_fetch_object($data);
							if(md5($pass) == $db->password){

								$_SESSION['status_login'] = true;
								$_SESSION['uid'] 	      = $db->id;
								$_SESSION['uname'] 	      = $db->nama;
								$_SESSION['ulevel'] 	  = $db->level;

								echo "<script>window.location = 'admin/index.php'</script>";


							}else{
								echo '<div class="alert alert-error">password salah</div>';
							}

						}else{
							echo '<div class="alert alert-error">username tidak ditemukan</div>';	
						}
					}

				?>

			</div>

			<div class="box-footer center">
				<a href="index.php">Halaman Utama</a>
			</div>

		</div>

	</div>

</body>
</html>