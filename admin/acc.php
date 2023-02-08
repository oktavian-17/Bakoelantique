<?php
     session_start();
     include '../koneksi.php';  
     if($_SESSION['status_login'] != true){
       echo '<script>window.location="index.php"</script>';
     }

     if(isset($_GET["id"])){
        $acc = mysqli_query($conn, "UPDATE pendaftaran SET s_daftar = 'Diterima' WHERE id_pendaftaran = '" . $_GET["id"]."'");
    

        $anggota_id = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '" . $_GET["id"]."'");
            $a = mysqli_fetch_object($anggota_id);
            $nrp = $a->nrp;
            $nama = $a->nm_peserta;
            $tgllhr = $a->tgl_lahir;
            $angkatan = date("Y", strtotime($a->tgl_daftar));
            $kelamin = $a->jk;
            $img = $a->img;
            $status = $a->status;

    $insert = mysqli_query ($conn, "INSERT INTO anggota VALUES (
        NULL,
        '".$nrp."',
        '".$nama."',
        '".$tgllhr."',
        '".$angkatan."',
        '".$kelamin."',
        '".$img."',
        '".$status."',
        'anggota'
     )");
  

      if($acc){
        echo '<script>window.location="data-pendaftar.php"</script>';
      }       
     }
?>