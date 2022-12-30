<?php include("header.php") ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header">
                  kegiatan
                    <br>
                    <br>
                    <a href="artikel-add.php" class="text-green"><i class="fa fa-plus"></i> Tambah</a>
                  </div>

          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM artikel");
            $no = 1;
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
                    <td><?=$row['img']?></td>
                    <td><?=$row['body']?></td>
                    <td class="text-center" width="10%">
                    <a class="btn btn-sm btn-outline-success" href="artikel-edit.php?id=<?=$row['id']?>">
                      Edit|
                    </a> 
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Ingin menghapus ?')" href="artikel-hapus.php?id=<?=$row['id']?>">
                      |Hapus
                    </a>
            </td>
                    </tr>
                <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
</body>
</html>