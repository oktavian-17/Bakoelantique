<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM galeri WHERE id = " . $_GET['id']);
    header("Location: galeri.php");
}