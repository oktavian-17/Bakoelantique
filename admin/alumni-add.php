<?php
include('../koneksi.php');
include("header.php");
?>

        <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                    Tambah Alumni
                  </div>

                  <div class="box-body">

                  <form action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        
                          <label for="judul">Nama</label>
                          <input type="text" class="input-control" name="judul" id="judul" value="" required>

                      </div>

                       <div class="form-group">
                        
                            <label for="body">Angkatan</label>
                            <input type="text" class="input-control" name="body" id="body" value="" required></textarea>
            
                      </div>

                      <div class="form-group">
                        
                          <label for="img">Gambar</label>
                          <input type="file" class="input-control" name="img" id="img" value="" required>

                      </div>  

                      <button type="button" class="butt" onclick="window.location = 'artikel.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">    
            
                  </form>

                  <?php 

                      if(isset($_POST['submit'])){

                          // print_r($_FILES['img']);
                          $judul = addslashes(ucwords($_POST['judul']));
                          $isi = addslashes($_POST['body']);

                          $filename   = $_FILES['img']['name'];
                          $tmpname    = $_FILES['img']['tmp_name'];
                          $filesize   = $_FILES['img']['size'];

                          $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                          $rename     = 'alumni'.time().'.'.$formatfile;

                          $allowedtype = array('png', 'jpg', 'jpeg', 'gif', 'JPG');

                          if(!in_array($formatfile, $allowedtype)){

                              echo '<div class="alert alert-error">Format file tidak didukung</div>';

                          }else{

                          move_uploaded_file($tmpname, "../images/".$rename);

                          $simpan = mysqli_query($conn, "INSERT INTO alumni VALUES (
                                null,
                                '".$judul."',
                                '".$rename."',
                                '".$isi."'
                          )");

                            if($simpan){
                              echo "<script>window.location='alumni.php?success=Simpan Berhasil'</script>";
                            }else{
                              echo 'Gagal Simpan'.mysqli_error($conn);
                            }    

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