<?php 
	include('../koneksi.php');
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
		
			<div class="box">
				
				<div class="box-header font-white">
					<h4>Pendaftaran Berhasil</h4>
				</div>

				<div class="box-body">

					<div class="form-group">
							
							<label>Kode Pendaftaran Anda adalah</label>
							<div class="input-control" readonly><?php echo $_GET['id'] ?></div>
							

					</div>
					<a href="cetak.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="butt butt-close">Cetak PDF</a>
					<a href="https://chat.whatsapp.com/Fun2oUmZZxMGqHRVUruoFt" target="_blank" class="butt butt-close">Join Grup Whatshapp</a>
					
				</div>

			</div>

		</div>

	</div>



</body>
</html>