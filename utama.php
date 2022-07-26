<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>JADWAL</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA JADWAL
              <a href="logout.php">logout</a>
            </div>
            <div class="card-body">
              <a href="tambah_jadwal.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH JADWAL</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA MATKUL</th>
                    <th scope="col">RUANGAN</th>
                    <th scope="col">DOSEN</th>
                    <th scope="col">HARI</th>
                    <th scope="col">CATATAN TUGAS</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM jadwal");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_matkul'] ?></td>
                      <td><?php echo $row['ruangan'] ?></td>
                      <td><?php echo $row['dosen'] ?></td>
                      <td><?php echo $row['hari'] ?></td>
                      <td><?php echo $row['catatan_tugas'] ?> </td>
                      <td class="text-center">
                        <a href="edit_jadwal.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_jadwal.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>

    <?php
}
else
{
    echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';
}
?>
