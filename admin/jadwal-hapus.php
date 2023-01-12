<?php
include('../koneksi.php');


if(isset($_GET['id'])){


    mysqli_query($conn, "DELETE FROM jadwal WHERE id = " . $_GET['id']);

    
    header("Location: jadwal.php");
}

?>