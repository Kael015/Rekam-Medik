<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$id_unitmedis = $_POST['id_unitmedis'];
$nama_unitmedis = $_POST['nama_unitmedis']; 
$spesialis = $_POST['spesialis']; 
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("update tb_unitmedis set nama_unitmedis = '$nama_unitmedis', spesialis = '$spesialis', alamat = '$alamat', telpon = '$telpon' where id_unitmedis = '$id_unitmedis'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-unitmedis.php'</script>";
}
?>