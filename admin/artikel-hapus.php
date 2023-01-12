<?php
include('../koneksi.php');


if(isset($_GET['id'])){

	$artikel = mysqli_query($conn, "SELECT img FROM artikel WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($artikel) > 0){

		$p = mysqli_fetch_object($artikel);

		if(file_exists("../images/".$p->img)){

			unlink("../images/".$p->img);

		}

	}

    mysqli_query($conn, "DELETE FROM artikel WHERE id = " . $_GET['id']);

    
    header("Location: artikel.php");
}

?>