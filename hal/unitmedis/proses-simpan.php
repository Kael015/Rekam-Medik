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
$simpan = mysql_query("insert into tb_unitmedis values ('$id_unitmedis','$nama_unitmedis','$spesialis','$alamat','$telpon')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-unitmedis.php'</script>";
}
?>