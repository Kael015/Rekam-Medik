<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['no_resep'])){
$no_resep = $_GET['no_resep'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_resep where no_resep = '$no_resep'");

echo"<script>window.alert('Data $no_resep Sudah Dihapus')
window.location='data-resep.php'</script>";
}
?>