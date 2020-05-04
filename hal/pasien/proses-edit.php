<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$kode_pasien = $_POST['kode_pasien'];
$nama_pasien = $_POST['nama_pasien']; 
$tanggal_lahir = $_POST['tanggal_lahir'];
//$dusun = $_POST['dusun'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("update tb_pasien set nama_pasien = '$nama_pasien', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', pekerjaan = '$pekerjaan', alamat = '$alamat', telpon = '$telpon' where kode_pasien = '$kode_pasien'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-pasien.php'</script>";
}
?>