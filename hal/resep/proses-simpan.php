<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$no_resep = $_POST['no_resepx'];
$no_rekmed = $_POST['no_rekmed'];
$tanggal = $_POST['tanggal'];

//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_resep values ('$no_resep','$no_rekmed','$tanggal')");


echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-resep.php'</script>";
}
?>