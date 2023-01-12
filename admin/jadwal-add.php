<?php
include('../koneksi.php');
include("header.php");
?>

        <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                    Tambah Anggota
                  </div>

                  <div class="box-body">

                  <form action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        
                          <label for="judul">Judul</label>
                          <input type="text" class="input-control" name="judul" id="judul" value="" required>

                      </div>

                       <div class="form-group">
                        
                            <label for="body">Keterangan</label>
                            <input type="text" class="input-control" name="body" id="body" value="" required></textarea>
            
                      </div>

                      <div class="form-group">
                        
                            <label for=tempat>Tempat</label>
                            <input type="text" class="input-control" name="tempat" id="tempat" value="" required></textarea>

                      </div> 

                      <div class="form-group">

                          <label for="tanggal">Tanggal</label>
                          <input type="date" class="input-control" name="tanggal" id="tanggal" value="" required>

                      </div> 

                      <button type="button" class="butt" onclick="window.location = 'anggota.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">    
            
                  </form>

                  <?php 

                      if(isset($_POST['submit'])){

                          // print_r($_FILES['img']);
                          $judul = addslashes(ucwords($_POST['judul']));
                          $isi = addslashes($_POST['body']);
                          $tempat = addslashes($_POST['tempat']);
                          $tanggal = addslashes($_POST['tanggal']);

                          move_uploaded_file($tmpname, "../images/".$rename);

                          $simpan = mysqli_query($conn, "INSERT INTO jadwal VALUES (
                                null,
                                '".$judul."',
                                '".$isi."',
                                '".$tempat."',
                                '".$tanggal."'
                          )");

                            if($simpan){
                              echo "<script>window.location='jadwal.php?success=Simpan Berhasil'</script>";
                            }else{
                              echo 'Gagal Simpan'.mysqli_error($conn);
                            }         

                      }

                  ?>
  
          </form>
        </div>
      </div>
      </div>
    </div>
</body>
</html>