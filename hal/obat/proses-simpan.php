<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat']; 
$jenis = $_POST['jenis'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_obat values ('$kode_obat','$nama_obat','$jenis','$satuan','$jumlah','$harga')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-obat.php'</script>";
}
?>