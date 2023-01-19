<?php include("header.php") ?>
   
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                  Jadwal Kegiatan
                    <br>
                    <br>
                    <a href="jadwal-add.php" class="butt text-cyan"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                  <?php 

                      if(isset($_GET['success'])){
                        echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                      }

                  ?>


          <?php
            $query = mysqli_query($conn, "SELECT * FROM jadwal");
            $no = 1;
          ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm ">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center">Tempat</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Aksi</th>
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
                    <td class="text-center" width="10%">
                    <a class="butt butt-close" href="jadwal-edit.php?id=<?=$row['id']?>">
                           Edit
                    </a>   
                    <a class="butt butt-close text-red" onclick="return confirm('Ingin menghapus ?')" href="jadwal-hapus.php?id=<?=$row['id']?>">
                      Hapus
                    </a>
                   </td>
                    </tr>
                <?php endwhile ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</body>
</html>