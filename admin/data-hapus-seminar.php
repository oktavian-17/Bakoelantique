<?php 
	include('../koneksi.php');

	if(isset($_GET['id'])){
		$delete = mysqli_query($conn, "DELETE FROM daftar_seminar WHERE id_pendaftaran = '".$_GET['id']."' ");
			echo '<script>window.location="data-seminar.php"</script>';
	}
 ?>