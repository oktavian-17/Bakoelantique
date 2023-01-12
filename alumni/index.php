<?php 
  include('../koneksi.php');

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
                  <th class="text-center">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Gambar</th>
                  <th class="text-center">Angkatan</th>
                </tr>
              </thead>
              <tbody>
                <?php 

                    $no = 1;

                    $where = "WHERE 1=1";
                      if(isset($_GET['key'])){
                        $where .= " AND title LIKE '%".$_GET['key']."%' ";
                      }


                    $list_peserta = mysqli_query($conn, "SELECT * FROM alumni $where ORDER BY id DESC");
                      if(mysqli_num_rows($list_peserta) > 0) {
                      while($row = mysqli_fetch_array($list_peserta)){
                 ?>

                <tr>
                  <td class="center"><?php echo $no++ ?></td>
                  <td><?php echo $row['title'] ?></td>
                  <td><img src="../images/<?=$row['img']?>" width="150px" class="text-center"></td>
                  <td><?php echo $row['body'] ?></td>
                </tr>

              <?php }}else{ ?>
                <tr>
                  <td colspan="5">Data tidak ada</td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</body>
</html>