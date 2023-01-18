<?php
include('../koneksi.php');


if(isset($_GET['id'])){

	$galeri = mysqli_query($conn, "SELECT img FROM seminar WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($galeri) > 0){

		$p = mysqli_fetch_object($galeri);

		if(file_exists("../images/".$p->img)){

			unlink("../images/".$p->img);

		}

	}

    mysqli_query($conn, "DELETE FROM seminar WHERE id = " . $_GET['id']);

    
    header("Location: seminar.php");
}

?>