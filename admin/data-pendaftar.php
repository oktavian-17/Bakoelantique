<?php 
    
    include('../koneksi.php');

     $peserta = mysqli_query($conn, "SELECT * FROM pendaftaran");
  
?>
<?php include 'header.php' ?>
  <!--KONTEN-->

  <section class="content">
    
    <div class="container">
    
      <div class="box">
        
        <div class="box-header font-white">
          <h3>Data Pendaftar</h3>
        </div>

        <div class="box-body">
           
            <table class="table">
              <thead>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama Peserta</th>
                            <th>NRP</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>

                        </tr>
                </thead>
              <tbody>

                <?php while($row = mysqli_fetch_object($peserta)): ?>
                        <tr>
                            <td><?= $row->tgl_daftar ?></td>
                            <td><?= $row->id_pendaftaran ?></td>
                            <td><?= $row->nm_peserta ?></td>
                            <td><?= $row->nrp ?></td>
                            <td><?= $row->jk ?></td>
                            <td>
                                <a href="detail-data.php?id=<?php echo $row->id_pendaftaran ?>" class="butt butt-close">Info</a>
                                <a href="data-hapus.php?id=<?php echo $row->id_pendaftaran ?>" class="butt butt-close text-red" onclick="return confirm('YAKIN ?')">Del</a>
                                <?php if($row->s_daftar != "Diterima"): ?> 
                                 <a href="acc.php?id=<?php echo $row->id_pendaftaran ?>" class="butt butt-close" onclick="return confirm('YAKIN ?')">Acc</a>
                                <?php endif?>
                            </td>
                        </tr>
                <?php endwhile ?>

              </tbody>
             </table> 
        </div>

      </div>

    </div>

  </section>

<?php include 'footer.php' ?>