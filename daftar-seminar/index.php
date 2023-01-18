<?php 

	include('../koneksi.php');
	if(isset($_POST['submit'])){

	$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM daftar_seminar");

	$d = mysqli_fetch_object($getMaxId);
	$generateId = 'S'.date('Y').sprintf("%05s", $d->id + 1);
	echo $generateId;

	//proses insert
	$insert = mysqli_query($conn, "INSERT INTO daftar_seminar VALUES (
		'".$generateId."',
		'".date('Y-m-d')."',
		'".$_POST['nrp']."',
		'".addslashes(ucwords($_POST['nm_peserta']))."',
		'".$_POST['tmp_lahir']."',
		'".$_POST['tgl_lahir']."',
		'".$_POST['jk']."',
		'".$_POST['agama']."',
		'".$_POST['almt_peserta']."'
	)");

	if($insert){
		echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
	}else{
		echo 'huft' .mysqli_error($conn);
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Seminar</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

	<!--KONTEN-->

	<div class="content">
		
		<div class="container">
		
			<section class="box">
				
				<div class="box-header font-white">
					Formulir Pendaftaran Seminar
					<?php
			                $result = mysqli_query($conn, "SELECT * FROM seminar");
			            ?>

			            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>

			                    <h3>
			                        <?=$row['title']?>   
			                    </h3>

			          <?php endwhile ?>
				</div>

				<div class="box-body">

					<form action="" method="POST">


						<div class="form-group">
							
							<label>Nama Lengkap</label>
							<input type="text" name="nm_peserta" placeholder="Nama Lengkap" class="input-control" required>

						</div>

						<div class="form-group">
							
							<label>NRP</label>
							<input type="text" name="nrp" placeholder="Nrp Anda" class="input-control" required>

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
							<select class="input-control" name="jk" required>
								<option>--pilih--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>

						</div>

						<div class="form-group">

							<label>Agama</label>
							
							<select class="input-control" name="agama" required>
								<option>--pilih--</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
								<option value="Konghucu">Konghucu</option>
							</select>

						</div>

						<div class="form-group">

							<label>Alamat Lengkap</label>
							<textarea type="text" name="almt_peserta" class="input-control" ></textarea required>

						</div>

						<button type="button" class="butt" onclick="window.location = '../index.php'">Kembali</button>
						<input type="submit" name="submit" value="DAFTAR" class="butt butt-close">		
	
					</form>

				</div>

			</section>

		</div>

	</div>



</body>
</html>