<?php 

	include('../koneksi.php');
	if(isset($_POST['nm_peserta'])){
    $nm_peserta = $_POST['nm_peserta'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($conn, "INSERT INTO pendaftar (nm_peserta, tmp_lahir, tgl_lahir, jk, agama, alamat) VALUES ('$nm_peserta', '$tmp_lahir', '$tgl_lahir', '$jk', '$agama', '$alamat')");
    header("Location: berhasil.php");

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Anggota</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

	<!--KONTEN-->

	<div class="content">
		
		<div class="container">
		
			<div class="box">
				
				<div class="box-header">
					Formulir Pendaftaran
				</div>

				<div class="box-body">

					<form action="" method="POST">

						<div class="form-group">
							
							<label>Nama Lengkap</label>
							<input type="text" name="nm_peserta" placeholder="Nama Lengkap" class="input-control" required>

						</div>

						<div class="form-group">
							
							<label>Tempat Lahir</label>
							<input type="text" name="tmp_lahir" class="input-control" required> 

						</div>

						<div class="form-group">
							
							<label>Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="input-control" required> 

						</div>		

						<div class="form-group">
							
							<label>Jenis Kelamin</label>
							<input type="radio" name="jk" value="Laki-laki" class="input-control" required> Laki-laki
							<input type="radio" name="jk" value="Perempuan" class="input-control" required> Perempuan

						</div>

						<div class="form-group">
							
							<select class="input-control" name="agama">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
								<option value="Konghucu">Konghucu</option>
							</select>

						</div>

						<div class="form-group">

							<label>Alamat Lengkap</label>
							<textarea type="text" name="alamat" class="input-control" required></textarea>

						</div>

						<button type="button" class="butt" onclick="window.location = '../index.php'">Kembali</button>
						<input type="submit" name="submit" value="DAFTAR" class="butt butt-close">		
	
					</form>

				</div>

			</div>

		</div>

	</div>



</body>
</html>