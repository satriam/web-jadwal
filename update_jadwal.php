<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_jadwal     = $_POST['id'];
$matkul            = $_POST['matkul'];
$ruangan           = $_POST['ruangan'];
$dosen             = $_POST['dosen'];
$hari              = $_POST['hari'];
$catatan           = $_POST['catatan'];


//query insert data ke dalam database

$query = "UPDATE jadwal SET nama_matkul = '$matkul', ruangan = '$ruangan', dosen = '$dosen',hari='$hari',catatan_tugas='$catatan' WHERE id = '$id_jadwal'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: utama.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>