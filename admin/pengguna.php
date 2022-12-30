
<?php include 'header.php' ?>
	<!--KONTEN-->

	<div class="content">
		
		<div class="container">
		
			<div class="box">
				
				<div class="box-header">
					Pengguna
				</div>

				<div class="box-body">

					<a href="tambah-pengguna.php" class="text-green"><i class="fa fa-plus"></i> Tambah</a>
					

					<form>
						
						  	<input type="text" name="key" placeholder="Pencarian">
						  	<button type="submit">Go</button>
						 	
					</form>

					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>

							<?php 
							$no = 1;

								$where = "WHERE 1=1";
								if(isset($_GET['key'])){
									$where .= " AND nama LIKE '%".$_GET['key']."%' ";
								}

								$pengguna = mysqli_query($conn, "SELECT * FROM pengguna $where ORDER BY id DESC");
								if(mysqli_num_rows($pengguna) > 0){
									while($pg = mysqli_fetch_array($pengguna)){
							?>

							<tr>
								<td><?= $no++ ?></td>
								<td><?= $pg['nama'] ?></td>
								<td><?= $pg['username'] ?></td>
								<td><?= $pg['level'] ?></td>
								<td>
									<a href="edit-pengguna.php?id=<?= $pg['id'] ?>" title="Edit Data" class="text-or"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="hapus.php?idpengguna=<?= $pg['id'] ?>" onclick="return confirm('yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fa-sharp fa-solid fa-trash"></i></a>
								</td>
							</tr>

							<?php }}else{ ?>
								<tr>
									<td colspan="5">Data tidak ada</td>
								</tr>
							<?php } ?>

						</tbody>
					</table>

				</div>

			</div>

		</div>

	</div>

<?php include 'footer.php' ?>