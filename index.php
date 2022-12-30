<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <title>Bakoelantique</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <div class="header">

        <div class="container">

            <div class="header-logo">
                <img src="images/logo.jpg" width="70px">
                <h2>Bakoelantique</h2>     
            </div> 

             <ul class="header-menu">
            
            <li><a href="index.php">Beranda</a></li>
            <li><a href="pendaftaran/index.php">Pendaftaran</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#artikel">Kegiatan</a></li>
            <li><a href="login.php">Login</a></li>

            </ul>      

        </div>

    </div>

    <div class="baner">

        <div class="baner-text">

            <div class="container">
                <h3>Selamat Datang Di Website Bakoelantique</h3>
                <p>Unit Kegiatan Mahasiswa STMIK Indonesia Banjarmasin</p>
            </div>

        </div>

    </div>


    <div class="borrder">
    <div id="galeri" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="box-header">
                <h2>Galeri Foto</h2>
            </div>
        </div>

        <div class="artikelHome" id="galeriData">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM galeri");
            ?>
            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>
                <a class="perArtikelHome">
                    <img src="images/<?=$row["img"]?>" alt="Galeri Foto <?=$row["id"]+1?>">
                    <h3><?=$row["title"]?></h3>
                    <p>
                        <?=$row["body"]?>
                    </p>
                </a>
            <?php endwhile ?>

        </div>
    </div>
    </div>


    <div class="borrder">
    <div id="artikel" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="box-header">
                <h2>Artikel Kegiatan</h2>
            </div>
        </div>

        <div class="artikelHome" id="artikelData">
            <?php
                $result = mysqli_query($conn, "SELECT * FROM artikel");
            ?>
            <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>
                <a class="perArtikelHome">
                    <img src="images/<?=$row["img"]?>" alt="Galeri Foto <?=$row["id"]+1?>">
                    <h3><?=$row["title"]?></h3>
                    <p>
                        <?=$row["body"]?>
                    </p>
                </a>
            <?php endwhile ?>

        </div>
    </div>
    </div>


    <div class="container">
        <div class="d-flex align-items-center justify-content-center">
            <div id="joinus" class="join">
                <div class="row">
                    <div class="col">
                        <a href="pendaftaran/index.php">
                            <button class="joinus">Daftar Sekarang</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("admin/footer.php") ?>

</body>
</html>