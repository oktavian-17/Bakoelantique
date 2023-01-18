<?php 
    
    include('../koneksi.php');
  
?>
<?php include 'header.php' ?>
  <!--KONTEN-->

  <section class="content">
    
    <div class="container">
    
      <div class="box">
        
        <div class="box-header font-white">
          Data Pendaftar
        </div>

        <div class="box-body">

        <form class="form-cari">
            
                <input type="text" name="key" class="input-cari" placeholder="Pencarian">
                <button type="submit" class="butt">SEARCH</button>
              
        </form>
           
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pendaftaran</th>
                  <th>Nama</th>
                  <th>NRP</th>
                  <th>Jenis Kelamin</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php 

                    $no = 1;

                    $where = "WHERE 1=1";
                      if(isset($_GET['key'])){
                        $where .= " AND nm_peserta LIKE '%".$_GET['key']."%' ";
                      }


                    $list_peserta = mysqli_query($conn, "SELECT * FROM pendaftaran $where ORDER BY id_pendaftaran DESC");
                      if(mysqli_num_rows($list_peserta) > 0) {
                      while($row = mysqli_fetch_array($list_peserta)){
                 ?>

                <tr>
                  <td class="center"><?php echo $no++ ?></td>
                  <td><?php echo $row['id_pendaftaran'] ?></td>
                  <td><?php echo $row['nm_peserta'] ?></td>
                  <td><?php echo $row['nrp'] ?></td>
                  <td><?php echo $row['jk'] ?></td>
                  <td>
                    <button class="butt butt-close">
                       Terima
                    </button>
                     <a class="butt butt-close" href="detail-data.php?id=<?php echo $row['id_pendaftaran'] ?>">
                      Detail
                    </a> 
                    <a class="butt butt-close text-red" onclick="return confirm('Yakin ingin menghapus ?')" href="data-hapus.php?id=<?php echo $row['id_pendaftaran'] ?>">
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

  </section>

<?php include 'footer.php' ?>