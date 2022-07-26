<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$matkul           = $_POST['matkul'];
$ruangan = $_POST['ruangan'];
$dosen       = $_POST['dosen'];
$hari       = $_POST['hari'];
$catatan       = $_POST['catatan'];


//query insert data ke dalam database
$query = "INSERT INTO jadwal (nama_matkul, ruangan, dosen,hari,catatan_tugas) VALUES ('$matkul', '$ruangan', '$dosen','$hari','$catatan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php ;
    header("location: utama.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>