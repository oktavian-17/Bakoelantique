<?php
include('../koneksi.php');

$artikel = mysqli_query($conn, "SELECT * FROM alumni WHERE id = '".$_GET['id']."' ");

if(mysqli_num_rows($artikel) == 0){
    echo "<script>window.location='alumni.php'</script>";
}

$p       = mysqli_fetch_object($artikel);

include("header.php");
?>
        
        <div class="content">
    
            <div class="container">
              
                <div class="box">
                  
                  <div class="box-header font-white">
                    <h3>Edit Alumni</h3>
                  </div>

                  <div class="box-body">
                  <form action="" method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="input-control" name="nrp" id="nrp" value="<?=$p->nrp?>" >
                      </div>

                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="input-control" name="nama" id="nama" value="<?=$p->nama?>" >
                      </div>

                      <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="input-control" name="tgl_lahir" id="tgl_lahir" value="<?=$p->tgl_lahir?>" >
                      </div>

                      <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="input-control" name="angkatan" id="angkatan" value="<?=$p->angkatan?>" >
                      </div>

                      <div class="form-group">
                        <label for="body">Jenis Kelamin</label>
                        <select class="input-control" name="jk" id="jk" value="<?=$p->jk?>">
                           <option value="Laki-laki">Laki-laki</option>
                           <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="img">Gambar</label>
                        <img src="../images/<?=$p->img?>" width="50px">
                        <input type="hidden" class="input-control" name="img2" id="img" value="<?=$p->img?>" >
                        <input type="file" class="input-control" name="img" id="img" >
                      </div>
                      
                      <button type="button" class="butt" onclick="window.location = 'anggota.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">   
                     
                  </form>

                  <?php 

                      if(isset($_POST['submit'])){

                          $nrp = $_POST['nrp'];
                          $nama = addslashes(ucwords($_POST['nama']));
                          $tgl_lahir = $_POST['tgl_lahir'];
                          $angkatan = $_POST['angkatan'];
                          $jk = $_POST['jk'];
                          $jabatan = $_POST['jabatan'];

                          if($_FILES['img']['name'] !=''){

                              echo 'user ganti gambar';

                              $filename   = $_FILES['img']['name'];
                              $tmpname    = $_FILES['img']['tmp_name'];
                              $filesize   = $_FILES['img']['size'];

                              $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                              $rename     = 'anggota'.time().'.'.$formatfile;

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

                          $update = mysqli_query($conn, "UPDATE alumni SET
                            nrp = '".$nrp."',
                            nama = '".$nama."',
                            tgl_lahir = '".$tgl_lahir."',
                            angkatan = '".$angkatan."',
                            jk = '".$jk."',
                            jabatan = '".$jabatan."',
                            img   = '".$rename."'
                            WHERE id = '".$_GET['id']."'
                          "); 

                          if($update){
                            echo "<script>window.location='alumni.php?success=Edit Data Berhasil'</script>";
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