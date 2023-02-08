<?php

  include('../koneksi.php');
  $anggota = mysqli_query($conn, "SELECT * FROM anggota");

?>

<?php include("header.php") ?>
   
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                  <h3>Anggota</h3>
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
                        <th>NRP</th>
                        <th>Foto</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Lahir</th>
                        <th>Angkatan</th>
                        <th>Kelamin</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
              </thead>
              <tbody>
                    <?php while($row = mysqli_fetch_object($anggota)): ?>
                    <tr>
                        <td><?= $row->nrp ?></td>
                        <td><img src="../images/<?= $row->img?>" width="50px" class="text-center"></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->tgl_lahir ?></td>
                        <td><?= $row->angkatan ?></td>
                        <td><?= $row->jk ?></td>
                        <td><?= $row->jabatan ?></td>
                        <td>
                            <a href="anggota-edit.php?id=<?php echo $row->id ?>" class="butt butt-close">Edit</a>
                            <?php if($row->status != "Alumni"): ?> 
                                 <a href="lulus.php?id=<?php echo $row->id ?>" class="butt butt-close" onclick="return confirm('YAKIN ?')">Lulus</a>
                            <?php endif?>
                            <a href="anggota-hapus.php?id=<?php echo $row->id ?>" class="butt butt-close text-red" onclick="return confirm('YAKIN ?')">Del</a>
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