<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <title>Bakoelantique</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
            <li><a href="anggota/index.php">Anggota</a></li>
            <li><a href="alumni/index.php">Alumni</a></li>
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

    <div class="logo">
        <div id="logo" class="container">
            <img src="images/logo.jpg" alt="BAKOELANTIQUE">

            <div class="visiMisi">

                <div class="visi">
                    <div class="row">
                        <div class="col"></div>
                        <div class="box-header font-white">
                             <h2>Keterangan</h2>
                        </div>
                         </div>
                    <h5>Bakoelantique adalah Unit Kegiatan Mahasiswa yang ada dikampus STMIK Indonesia Banjarmasin. Unit Kegiatan Mahasiswa Bakoelantique mempelajari tentang photography dan videography menggunakan kamera DSLR maupun Mirroless.</h5>
                </div>
            </div>

        </div>
    </div>


    <div class="borrder">
    <div id="galeri" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="box-header font-white">
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
            <div class="box-header font-white">
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


    <div class="borrder">
    <div id="galeri" class="containerArtikelHome container">
        <div class="row">
            <div class="col"></div>
            <div class="box-header font-white">
                <h2>Jadwal Kegiatan</h2>
            </div>
        </div>
            <div class="box">

                    <?php
                      $query = mysqli_query($conn, "SELECT * FROM jadwal");
                      $no = 1;
                    ?>

                  <div class="table-responsive">
                    <table class="table table-striped table-sm ">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Kegiatan</th>
                          <th class="text-center">Keterangan</th>
                          <th class="text-center">Tempat</th>
                          <th class="text-center">Tanggal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                            <tr>
                            <td><?=$no++?></td>
                            <td><?=$row['title']?></td>
                            <td><?=$row['body']?></td>
                            <td><?=$row['tempat']?></td>
                            <td><?=$row['tanggal']?></td>
                            </tr>
                        <?php endwhile ?>
                      </tbody>
                    </table>
                  </div>
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

    <footer class="footer-distributed">
        <div class="footer-left">
            <h2 class="footer-name">Bakoelantique</h2>

            <p class="footer-links">
                <a class="font-white" href="index.php">Beranda</a>
                |
                <a class="font-white" href="#logo">Keterangan</a>
                |
                <a class="font-white" href="#galeri">Galeri</a>
                |
                <a class="font-white" href="#artikel">Artikel</a>
            </p>

            <p class="footer-company-name">Copyright &copy; 2022 - <strong>Dicky Oktavian (19041076)</strong></p>
        </div>

        <div class="footer-center">
            <div class="footer-list">
                <i class="fa fa-map-marker"></i>
                <p><span>Banjarmasin</span></p>
            </div>
            <div class="footer-list">
                <i class="fa fa-phone"></i>
                <p>+62878788878</p>
            </div>
            <div class="footer-list">
                <i class="fa fa-envelope"></i>
                <p><a href="#">Bakoelantique@gmail.com</a></p>
            </div>

             <div class="footer-list">
                <i class="fa-brands fa-instagram"></i>
                <p><a href="https://www.instagram.com/bakoelantiquephotography10/">Bakoelantiquephotography10</a></p>
            </div>
        </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang</span>
                <strong>Bakoelantique</strong> Bakoelantique adalah Unit Kegiatan Mahasiswa yang ada dikampus STMIK Indonesia Banjarmasin. Unit Kegiatan Mahasiswa Bakoelantique mempelajari tentang photography dan videography menggunakan kamera DSLR maupun Mirroless.
            </p>
            <div class="footer-icons">
                <a class="footer-icon font-white" href=""><i class="fa-brands fa-instagram"></i></a>
                <a class="footer-icon font-white" href=""><i class="fa-brands fa-twitter"></i></a>
                <a class="footer-icon font-white" href=""><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>