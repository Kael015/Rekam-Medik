<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['kode_pasien'])){
$kode_pasien = $_GET['kode_pasien'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_pasien where kode_pasien = '$kode_pasien'");

echo"<script>window.alert('Data $kode_pasien Sudah Dihapus')
window.location='data-pasien.php'</script>";
}
?>