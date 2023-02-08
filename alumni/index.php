<?php 
  include('../koneksi.php');
  $anggota = mysqli_query($conn, "SELECT * FROM alumni");

 ?>

    <!DOCTYPE html>
    <html>
    <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Alumni</title>
          <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    </head>
    <body>

    <div class="header">

        <div class="container">

            <div class="header-logo">
                <img src="../images/logo.jpg" width="70px">
                <h2>Bakoelantique</h2>     
            </div> 

             <ul class="header-menu">
            
            <li><a href="../../Bakoelantique">Beranda</a></li>
            <li><a href="../pendaftaran/index.php">Pendaftaran</a></li>
            <li><a href="../anggota/index.php">Anggota</a></li>
            <li><a href="../alumni">Alumni</a></li>
            <li><a href="../login.php">Login</a></li>


            </ul>      

        </div>

    </div>
   
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                  Alumni
                  </div>
                  <?php 

                      if(isset($_GET['success'])){
                        echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                      }

                  ?>

          <div class="table-responsive">
            <form class="form-cari">
            
                <input type="text" name="key" class="input-cari" placeholder="Pencarian">
                <button type="submit" class="butt">SEARCH</button>
              
            </form>
            <table class="table table-striped table-sm ">
              <thead>
                    <tr>
                        <th>NRP</th>
                        <th>Foto</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Lahir</th>
                        <th>Angkatan</th>
                        <th>Kelamin</th>
                    </tr>
              </thead>
              <tbody>
                    <?php while($row = mysqli_fetch_object($anggota)): ?>
                    <tr>
                        <td><?= $row->nrp ?></td>
                        <td><img src="../images/<?= $row->img?>" width="70px" class="text-center"></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->tgl_lahir ?></td>
                        <td><?= $row->angkatan ?></td>
                        <td><?= $row->jk ?></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
          </div>
      </div>
    </div>
</body>
</html>