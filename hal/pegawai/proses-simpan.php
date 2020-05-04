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
$simpan = mysql_query("insert into tb_pegawai values ('$kode_pegawai','$nama_pegawai','$nama_bagian','$tanggal_lahir','$alamat','$telpon')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-pegawai.php'</script>";
}
?>