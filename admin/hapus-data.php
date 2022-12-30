<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM pendaftar WHERE id = " . $_GET['id']);
    header("Location: data-pendaftar.php");
}