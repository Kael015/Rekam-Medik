<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['kode_pegawai'])){
$kode_pegawai = $_GET['kode_pegawai'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_pegawai where kode_pegawai = '$kode_pegawai'");

echo"<script>window.alert('Data $kode_pegawai Sudah Dihapus')
window.location='data-pegawai.php'</script>";
}
?>