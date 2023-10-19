<?php

//include koneksi database
include('koneksi.php');

//get data dari form
// $id  = $_POST['jenis_kendaraan'];
$jenis_kendaraan     = $_POST['jenis_kendaraan'];
$plat_kendaraan    = $_POST['plat_kendaraan'];

$nama_kendaraan    = $_POST['nama_kendaraan'];


//query insert data ke dalam database
$query = "INSERT INTO parkiran (jenis_kendaraan, plat_kendaraan, nama_kendaraan, jam_masuk ) VALUES ('$jenis_kendaraan', '$plat_kendaraan', '$nama_kendaraan', NOW())";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}     