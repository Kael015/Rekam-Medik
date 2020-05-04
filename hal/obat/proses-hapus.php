<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['kode_obat'])){
$kode_obat = $_GET['kode_obat'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_obat where kode_obat = '$kode_obat'");

echo"<script>window.alert('Data $kode_obat Sudah Dihapus')
window.location='data-obat.php'</script>";
}
?>