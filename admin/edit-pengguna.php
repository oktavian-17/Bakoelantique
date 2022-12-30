
<?php include 'header.php' ?>
	<!--KONTEN-->

<?php 

	$pengguna = mysqli_query($conn, "SELECT * FROM pengguna WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_row($pengguna) == 0){
		echo "<script>window.location='pengguna.php'</script>";
	}

	$pg       = mysqli_fetch_object($pengguna);

 ?>	

	<div class="content">
		
		<div class="container">
		
			<div class="box">
				
				<div class="box-header">
					Edit Pengguna
				</div>

				<div class="box-body">

					<form action="" method="POST">

						<div class="form-group">
							
							<label>Nama</label>
							<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value= "<?= $pg->nama ?>"required>

						</div>

						<div class="form-group">
							
							<label>Username</label>
							<input type="text" name="user" placeholder="Username" class="input-control" value= "<?= $pg->username ?>" required> 

						</div>	

						<div class="form-group">
							
							<label>Level</label>
							<select name="level" class="input-control" required>
								<option value="">Pilih</option>
								<option value="Super Admin" <?= ($pg->level == 'Super Admin')? 'selected':''; ?>>Super Admin</option>
								<option value="Admin"<?= ($pg->level == 'Admin')? 'selected':''; ?>>Admin</option>
							</select>
							
						</div>

						<button type="button" class="butt" onclick="window.location = 'pengguna.php'">Kembali</button>
						<input type="submit" name="submit" value="Simpan" class="butt butt-close">		
	
					</form>

					<?php 

						if(isset($_POST['submit'])){

							$nama 	= ucwords($_POST['nama']);
							$user 	= $_POST['user'];
							$level 	= $_POST['level'];

							$update = mysqli_query($conn, "UPDATE pengguna SET
								nama = '".$nama."',
								username = '".$user."',
								level = '".$level."'
								WHERE id = '".$_GET['id']."'
							");	

							if($update){
								echo '<div class="alert alert-success">Edit Data Berhasil</div>';
							}else{
								echo 'gagal edit' .mysqli_error($conn);
							}

						}

					?>

				</div>

			</div>

		</div>

	</div>

<?php include 'footer.php' ?>