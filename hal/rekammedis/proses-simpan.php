<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$no_rekmed = $_POST['no_rekmed'];
$tanggal = $_POST['tanggal']; 
$kode_pasien = $_POST['kode_pasien'];
$id_unitmedis = $_POST['id_unitmedis'];
$diagnosa1 = $_POST['diagnosa1'];
$diagnosa2 = $_POST['diagnosa2'];
$keterangan = $_POST['keterangan'];

//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_rekmed values ('$no_rekmed','$kode_pasien','$id_unitmedis','$diagnosa1','$diagnosa2','$keterangan','$tanggal')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-rekmed.php'</script>";
}
?>