<?php 
	include('../koneksi.php');

	$peserta = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
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
		
			<div class="box">
				
				<div class="box-header font-white">
					<h2>Bukti Pendaftaran</h2>
				</div>
				
				<table class="table-data">
					<tr>
						<td>Kode Pendaftaran</td>
						<td>:</td>
						<td><?php echo $p->id_pendaftaran ?></td>
					</tr>
			
					<tr>
						<td>Tanggal Daftar</td>
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
		
					<tr>
						<td>Alasan Mendaftar UKM Bakoelantique</td>
						<td> : </td>
						<td><?php echo $p->Alasan ?></td>
					</tr>
				</table>
				<button type="button" class="butt" onclick="window.location = '../index.php'">Kembali</button>

			</div>

		</div>

	</div>



</body>
</html>