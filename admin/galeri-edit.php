<?php
include('../koneksi.php');

$galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE id = '".$_GET['id']."' ");

if(mysqli_num_rows($galeri) == 0){
    echo "<script>window.location='galeri.php'</script>";
}

$p       = mysqli_fetch_object($galeri);

include("header.php");
?>
        
        <div class="content">
    
            <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                    Edit Artikel
                  </div>

                  <div class="box-body">
                  <form action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="input-control" name="judul" id="judul" value="<?=$p->title?>" >
                      </div>

                      <div class="form-group">
                        <label for="body">Isi</label>
                        <textarea type="text" class="input-control" name="body" id="body" value="<?=$p->body?>" ></textarea>
                      </div>

                      <div class="form-group">
                        <label for="img">Gambar</label>
                        <img src="../images/<?=$p->img?>" width="150px">
                        <input type="hidden" class="input-control" name="img2" id="img" value="<?=$p->img?>" >
                        <input type="file" class="input-control" name="img" id="img" >
                      </div>
                      
                      <button type="button" class="butt" onclick="window.location = 'artikel.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">   
                     
                  </form>

                  <?php 

                      if(isset($_POST['submit'])){

                          $judul = addslashes(ucwords($_POST['judul']));
                          $isi = addslashes($_POST['body']);

                          if($_FILES['img']['name'] !=''){

                              echo 'user ganti gambar';

                              $filename   = $_FILES['img']['name'];
                              $tmpname    = $_FILES['img']['tmp_name'];
                              $filesize   = $_FILES['img']['size'];

                              $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                              $rename     = 'galeri'.time().'.'.$formatfile;

                              $allowedtype = array('png', 'jpg', 'jpeg', 'gif', 'JPG');

                              if(!in_array($formatfile, $allowedtype)){

                              echo '<div class="alert alert-error">Format file tidak didukung</div>';

                              return false;

                              }else{

                                  if(file_exists("../images/".$_POST['img2'])){

                                      unlink("../images/".$_POST['img2']);

                                  }

                                  move_uploaded_file($tmpname, "../images/".$rename);

                              }   

                          }else{

                              // echo 'user tidak ganti gambar';

                              $rename   = $_POST['img2'];

                          }

                          $update = mysqli_query($conn, "UPDATE galeri SET
                            title = '".$judul."',
                            img   = '".$rename."',
                            body  = '".$isi."'
                            WHERE id = '".$_GET['id']."'
                          "); 

                          if($update){
                            echo "<script>window.location='galeri.php?success=Edit Data Berhasil'</script>";
                          }else{
                            echo 'gagal edit' .mysqli_error($conn);
                          }

                      }

                  ?>
        </div>
      </div>
      </div>
    </div>
</body>
</html>