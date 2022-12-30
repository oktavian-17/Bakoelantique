<?php
include('../koneksi.php');
if(isset($_POST['judul'])){
    $title = $_POST['judul'];
    $img = $_POST['img'];
    $body = $_POST['body'];
    $query = mysqli_query($conn, "INSERT INTO galeri (title, img, body) VALUES ('$title', '$img', '$body')");
    header("Location: galeri.php");
}
include("header.php");
?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Galeri - Tambahkan</h1>
          </div>

          <div class="row">
        
        <div class="col-md-12 order-md-1">

          class="row">
        <div class="content">
    
              <div class="container">
              
                <div class="box">
                  
                  <div class="box-header">
                    Tambah Galeri
                  </div>

                  <div class="box-body">

                    <form action="" method="POST">

                      <div class="form-group">
                        
                          <label for="judul">Judul</label>
                          <input type="text" class="input-control" name="judul" id="judul" value="" required>

                      </div>

                      <div class="form-group">
                        
                          <label for="img">Filename Gambar</label>
                          <input type="text" class="input-control" name="img" id="img" value="" required>

                      </div>  

                      <div class="form-group">
                        
                            <label for="body">Isi</label>
                            <input type="text" class="input-control" name="body" id="body" value="" required>
            
                      </div>

                      <button type="button" class="butt" onclick="window.location = 'galeri.php'">Kembali</button>
                      <input type="submit" name="submit" value="Simpan" class="butt butt-close">    
            
                    </form>
  
          </form>
        </div>
      </div>
        </main>
      </div>
    </div>
</body>
</html>