<?php
include('../koneksi.php');
if(isset($_GET['id']) && isset($_POST['judul'])){
    $title = $_POST['judul'];
    $img = $_POST['img'];
    $body = $_POST['body'];
    $query = mysqli_query($conn, "UPDATE galeri SET title = '$title', img = '$img', body = '$body' WHERE id = " . @$_GET['id']);
    header("Location: galeri.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Galeri - Edit</h1>
          </div>

          <?php
            $query = mysqli_query($conn, "SELECT * FROM galeri WHERE id = " . @$_GET['id']);
            $data = mysqli_fetch_array($query);
          ?>
          <div class="row">
        <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header">
                    Edit Galeri
                  </div>

                  <div class="box-body">

                    <form action="" method="POST">

                      <div class="form-group">
                        
                          <label for="judul">Judul</label>
                          <input type="text" class="input-control" name="judul" id="judul" value="<?=$data['title']?>" required>

                      </div>

                      <div class="form-group">
                        
                          <label for="img">Filename Gambar</label>
                          <input type="text" class="input-control" name="img" id="img" value="<?=$data['img']?>" required>

                      </div>  

                      <div class="form-group">
                        
                          <label for="body">Isi</label>
                          <input type="text" class="input-control" name="body" id="body" value="<?=$data['body']?>" required>
                        
                      </div>

                      <button type="button" class="butt" onclick="window.location = 'galeri.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">    
            
                    </form>
              </div>
        </main>
      </div>
    </div>
</body>
</html>