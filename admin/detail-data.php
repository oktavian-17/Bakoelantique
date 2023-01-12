<?php 
    
    include('../koneksi.php');
    $peserta = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
  
?>
<?php include 'header.php' ?>
  <!--KONTEN-->

  <section class="content">
    
    <div class="container">
    
      <div class="box">
        
            <div class="box-header font-white">
              Detail Pendaftar
            </div>

            <div class="box-body">
                <table class="table-data">
                    <tr>
                      <td>Kode Pendaftaran</td>
                      <td>:</td>
                      <td><?php echo $p->id_pendaftaran ?></td>
                    </tr>
                
                    <tr>
                      <td>Tanggal Daftar</td>
                      <td>:</td>
                      <td><?php echo date('d-m-Y') ?></td>
                    </tr>

                    <tr>
                      <td>Nama Lengkap</td>
                      <td>:</td>
                      <td><?php echo $p->nm_peserta ?></td>
                    </tr>
                  
                    <tr>
                      <td>NRP</td>
                      <td>:</td>
                      <td><?php echo $p->nrp ?></td>
                    </tr>
              
                    <tr>
                      <td>Tempat, Tanggal Lahir</td>
                      <td>:</td>
                      <td><?php echo $p->tmp_lahir.','.$p->tgl_lahir ?></td>
                    </tr>
                
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>:</td>
                      <td><?php echo $p->jk ?></td>
                    </tr>
              
                    <tr>
                      <td>Agama</td>
                      <td>:</td>
                      <td><?php echo $p->agama ?></td>
                    </tr>
              
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?php echo $p->almt_peserta ?></td>
                    </tr>
              
                    <tr>
                      <td>Alasan Mendaftar UKM Bakoelantique</td>
                      <td> : </td>
                      <td><?php echo $p->Alasan ?></td>
                    </tr>
                </table>
              <button type="button" class="butt" onclick="window.location = 'data-pendaftar.php'">Kembali</button>
            </div>

      </div>

    </div>

  </section>

<?php include 'footer.php' ?>