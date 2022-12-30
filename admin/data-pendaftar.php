<?php include("header.php") ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header">
                  Data Pendaftar
                    <br>

          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM pendaftar");
            $no = 1;
          ?>

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Hapus Data</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <td><?=$no++?></td>
                    <td><?=$row['nm_peserta']?></td>
                    <td><?=$row['tmp_lahir']?></td>
                    <td><?=$row['tgl_lahir']?></td>
                    <td><?=$row['jk']?></td>
                    <td><?=$row['agama']?></td>
                    <td><?=$row['alamat']?></td>
                    <td class="text-center" width="10%">
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Ingin menghapus ?')" href="hapus-data.php?id=<?=$row['id']?>">|  Hapus |</a>
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