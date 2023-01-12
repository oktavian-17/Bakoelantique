<?php
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel Admin - Bakoelantique</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<div class="navbar">
		
		<div class="container">
			
			<h2 class="nav-brand float-left"><a href="index.php">Bakoelantique</a></h2>

			<ul class="nav-menu float-left">
				<li><a href="index.php">Dashboard</a></li>

				<?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

					<li><a href="pengguna.php">Pengguna</a></li>

				<?php }elseif($_SESSION['ulevel'] == 'Admin'){ ?>

					<li>
					<a href="">Data <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown">
						<li><a href="alumni.php">Alumni</a></li>
						<li><a href="anggota.php">Anggota</a></li>
						<li><a href="data-pendaftar.php">Pendaftar</a></li>
					</ul>
					</li>
					<li><a href="galeri.php">Galeri</a></li>
					<li>
						<a href="artikel.php">Kegiatan</i></a>
					</li>
					<li><a href="jadwal.php">Jadwal Kegiatan</a></li>

			    <?php } ?>

				<li>
					<a href=""><?= $_SESSION['uname'] ?>  (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

					<ul class="dropdown">
						<li><a href="ubah-password.php">Ubah Password</a></li>
						<li><a href="logout.php">Keluar</a></li>
					</ul>

				</li>		
			</ul>

			<div class="clearfix"></div>
		</div>

	</div>