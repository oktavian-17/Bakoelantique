<?php 
	include('../koneksi.php');

	$peserta = mysqli_query($conn, "SELECT * FROM daftar_seminar WHERE id_pendaftaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Anggota</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script>window.print();</script>
</head>
<body>

	<!--KONTEN-->

	<div class="content">
		
		<div class="container">
			<center>
			<div class="box">
				
				<div class="box-header font-white">
					<h2> Sertifikat </h2>
					<?php
			            $result = mysqli_query($conn, "SELECT * FROM seminar");
			            ?>

			            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>

			                    <h3>
			                        <?=$row['title']?>   
			                    </h3>

			         <?php endwhile ?>
				</div>
				
				<table class="table-data">
			
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><?php echo date('d-m-Y') ?></td>
					</tr>

					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?php echo $p->nm_peserta ?></td>
					</tr>
				
					<tr>
						<td>NRP</td>
						<td>:</td>
						<td><?php echo $p->nrp ?></td>
					</tr>
		
					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>:</td>
						<td><?php echo $p->tmp_lahir.','.$p->tgl_lahir ?></td>
					</tr>
			
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><?php echo $p->jk ?></td>
					</tr>
		
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><?php echo $p->agama ?></td>
					</tr>
		
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?php echo $p->almt_peserta ?></td>
					</tr>
		
				</table>
		
			</div>
			</center>
		</div>

	</div>



</body>
</html>