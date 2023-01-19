<?php
include('../koneksi.php');

$jadwal = mysqli_query($conn, "SELECT * FROM jadwal WHERE id = '".$_GET['id']."' ");

if(mysqli_num_rows($jadwal) == 0){
    echo "<script>window.location='jadwal.php'</script>";
}

$p       = mysqli_fetch_object($jadwal);

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
                        <input type="text" class="input-control" name="judul" id="judul" value="<?=$p->title?>" required>
                      </div>

                      <div class="form-group">
                        <label for="body">Isi</label>
                        <input type="text" class="input-control" name="body" id="body" value="<?=$p->body?>" required>
                      </div>

                      <div class="form-group">                       
                            <label for=tempat>Tempat</label>
                            <input type="text" class="input-control" name="tempat" id="tempat" value="<?=$p->tempat?>" required></textarea>
                      </div> 

                      <div class="form-group">
                          <label for="tanggal">Tanggal</label>
                          <input type="date" class="input-control" name="tanggal" id="tanggal" value="<?=$p->tanggal?>" required>
                      </div> 
                      
                      <button type="button" class="butt" onclick="window.location = 'jadwal.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">   
                     
                  </form>

                  <?php 

                      if(isset($_POST['submit'])){

                          $judul = addslashes(ucwords($_POST['judul']));
                          $isi = addslashes($_POST['body']);
                          $tempat = addslashes($_POST['tempat']);
                          $tanggal = addslashes($_POST['tanggal']);

                          $update = mysqli_query($conn, "UPDATE jadwal SET
                            title   = '".$judul."',
                            body    = '".$isi."',
                            tempat  = '".$tempat."',
                            tanggal = '".$tanggal."'
                            WHERE id = '".$_GET['id']."'
                          "); 

                          if($update){
                            echo "<script>window.location='jadwal.php?success=Edit Data Berhasil'</script>";
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