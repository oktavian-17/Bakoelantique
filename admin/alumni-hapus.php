<?php
include('../koneksi.php');


if(isset($_GET['id'])){

	$alumni = mysqli_query($conn, "SELECT img FROM alumni WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($alumni) > 0){

		$p = mysqli_fetch_object($alumni);

		if(file_exists("../images/".$p->img)){

			unlink("../images/".$p->img);

		}

	}

    mysqli_query($conn, "DELETE FROM alumni WHERE id = " . $_GET['id']);

    
    header("Location: alumni.php");
}

?>