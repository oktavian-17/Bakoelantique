<?php
include('../koneksi.php');
if(isset($_GET['id'])){
    mysqli_query($conn, "DELETE FROM artikel WHERE id = " . $_GET['id']);
    header("Location: artikel.php");
}