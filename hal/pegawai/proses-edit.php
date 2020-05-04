<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$kode_pegawai = $_POST['kode_pegawai'];
$nama_pegawai = $_POST['nama_pegawai']; 
$nama_bagian = $_POST['nama_bagian']; 
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("update tb_pegawai set nama_pegawai = '$nama_pegawai', nama_bagian = '$nama_bagian', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', telpon = '$telpon' where kode_pegawai = '$kode_pegawai'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-pegawai.php'</script>";
}
?>