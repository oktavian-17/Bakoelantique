<?php
include('../koneksi.php');


if(isset($_GET['id'])){

	$anggota = mysqli_query($conn, "SELECT img FROM anggota WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($anggota) > 0){

		$p = mysqli_fetch_object($anggota);

		if(file_exists("../images/".$p->img)){

			unlink("../images/".$p->img);

		}

	}

    mysqli_query($conn, "DELETE FROM anggota WHERE id = " . $_GET['id']);

    
    header("Location: anggota.php");
}

?>