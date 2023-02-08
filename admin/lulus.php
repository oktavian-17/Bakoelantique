<?php
     session_start();
     include '../koneksi.php';  
     if($_SESSION['status_login'] != true){
       echo '<script>window.location="index.php"</script>';
     }

     if(isset($_GET["id"])){
        $acc = mysqli_query($conn, "UPDATE anggota SET status = 'Alumni' WHERE id = '" . $_GET["id"]."'");
    

        $anggota_id = mysqli_query($conn, "SELECT * FROM anggota WHERE id = '" . $_GET["id"]."'");
            $a = mysqli_fetch_object($anggota_id);
            $nrp = $a->nrp;
            $nama = $a->nama;
            $tgl_lahir = $a->tgl_lahir;
            $angkatan = $a->angkatan;
            $kelamin = $a->jk;
            $img = $a->img;

    $insert = mysqli_query ($conn, "INSERT INTO alumni VALUES (
        NULL,
        '".$nrp."',
        '".$nama."',
        '".$tgl_lahir."',
        '".$angkatan."',
        '".$kelamin."',
        '".$img."',
        'Alumni'
     )");
  

      if($acc){
        echo '<script>window.location="anggota.php"</script>';
      }       
     }
?>