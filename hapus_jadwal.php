<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM jadwal WHERE id = '$id'";

if($connection->query($query)) {
    header("location: utama.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>