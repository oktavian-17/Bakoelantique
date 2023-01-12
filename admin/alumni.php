<?php include("header.php") ?>
   
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                  Alumni
                    <br>
                    <br>
                    <a href="alumni-add.php" class="butt text-cyan"><i class="fa fa-plus"></i> Tambah</a>
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
                  <th class="text-center">Aksi</th>
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
                  <td>
                    <a class="butt butt-close" href="alumni-edit.php?id=<?=$row['id']?>">
                      Edit
                    </a> 
                    <a class="butt butt-close text-red" onclick="return confirm('Ingin menghapus ?')" href="alumni-hapus.php?id=<?=$row['id']?>">
                      Hapus
                    </a>
                  </td>
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