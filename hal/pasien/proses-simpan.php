<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$kode_pasien = $_POST['kode_pasien'];
$nama_pasien = $_POST['nama_pasien']; 
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
$tanggal = $_POST['tanggal'];

//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_pasien values ('$kode_pasien','$nama_pasien','$tanggal_lahir','$jenis_kelamin','$pekerjaan','$alamat','$telpon','$tanggal')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='../index.php'</script>";
}
?>