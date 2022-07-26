<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Jadwal</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH JADWAL
            </div>
            <div class="card-body">
              <form action="simpan_jadwal.php" method="POST">
                
                <div class="form-group">
                  <label>NAMA MATA KULIAH</label>
                  <input type="text" name="matkul" placeholder="Masukkan Mata Kuliah" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Ruangan</label>
                  <input type="text" name="ruangan" placeholder="Masukkan ruangan" class="form-control"required>
                </div>
                <div class="form-group">
                  <label>Dosen</label>
                  <input type="text" name="dosen" placeholder="Masukkan nama dosen" class="form-control"required>
                </div>
                 <div class="form-group">
                  <label>hari</label>
                  <input type="text" name="hari" placeholder="Masukkan hari" class="form-control"required>
                </div>

                <div class="form-group">
                  <label></label>
                  <textarea class="form-control" name="catatan" placeholder="Masukkan Catatan tugas" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a class="btn btn-primary" href="utama.php" role="button">KEMBALI</a>

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