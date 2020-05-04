<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_GET['no_rekmed'])){
$no_rekmed = $_GET['no_rekmed'];


//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("delete from tb_rekmed where no_rekmed = '$no_rekmed'");

echo"<script>window.alert('Data $no_rekmed Sudah Dihapus')
window.location='data-rekmed.php'</script>";
}
?>