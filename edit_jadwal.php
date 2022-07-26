<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM jadwal WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Update Jadwal</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              UPDATE JADWAL
            </div>
            <div class="card-body">
              <form action="update_jadwal.php" method="POST">
                
                <div class="form-group">
                  <label>NAMA MATA KULIAH</label>
                  <input type="text" name="matkul" value="<?php echo $row['nama_matkul'] ?>" placeholder="Masukkan Mata Kuliah" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Ruangan</label>
                  <input type="text" name="ruangan"  value="<?php echo $row['ruangan'] ?>" placeholder="Masukkan ruangan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Dosen</label>
                  <input type="text" name="dosen"  value="<?php echo $row['dosen'] ?>" placeholder="Masukkan nama dosen" class="form-control">
                </div>
                 <div class="form-group">
                  <label>hari</label>
                  <input type="text" name="hari"  value="<?php echo $row['hari'] ?>" placeholder="Masukkan hari" class="form-control">
                </div>
                <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" name="catatan" placeholder="Masukkan catatan" rows="4"><?php echo $row['catatan_tugas'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a class="btn btn-primary" href="index.php" role="button">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>