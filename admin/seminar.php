<?php include("header.php") ?>

<?php
    $query = mysqli_query($conn, "SELECT * FROM seminar");
    $no = 1;
?>

           <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                   Seminar
                    <br>
                    <br>
                    <a href="seminar-add.php" class="butt text-cyan"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                  <?php 

                      if(isset($_GET['success'])){
                        echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                      }

                  ?>

                  <div class="table-responsive">
                  <table class="table table-striped table-sm ">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($row = mysqli_fetch_array($query)): ?>
                          <tr>
                          <td><?=$no++?></td>
                          <td><?=$row['title']?></td>
                          <td><img src="../images/<?=$row['img']?>" width="150px" class="text-center"></td>
                          <td><?=$row['body']?></td>
                          <td class="text-center" width="10%">
                          <a class="butt butt-close" href="seminar-edit.php?id=<?=$row['id']?>">
                           Edit
                          </a> 
                          <a class="butt butt-close text-red" onclick="return confirm('Ingin menghapus ?')" href="seminar-hapus.php?id=<?=$row['id']?>">
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