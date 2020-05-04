<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['no_kwitansi'])){
$no_kwitansi = $_GET['no_kwitansi'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_kwitansi where no_kwitansi = '$no_kwitansi'");

echo"<script>window.alert('Data $no_kwitansi Sudah Dihapus')
window.location='data-kwitansi.php'</script>";
}
?>