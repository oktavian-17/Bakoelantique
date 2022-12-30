<?php include("header.php") ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Galeri</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
          
             
            </div>
          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM galeri");
            $no = 1;
          ?>

           <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header">
                   Galeri
                    <br>
                    <br>
                    <a href="galeri-add.php" class="text-green"><i class="fa fa-plus"></i> Tambah</a>
                  </div>

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
                    <a class="btn btn-sm btn-outline-success" href="galeri-edit.php?id=<?=$row['id']?>">
                     Edit|
                    </a> 
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Ingin menghapus ?')" href="galeri-hapus.php?id=<?=$row['id']?>">
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