<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$no_reg = $_POST['no_reg'];
$tgl_reg = $_POST['tgl_reg']; 
$unit_tujuan = $_POST['unit_tujuan'];
$kode_pasien = $_POST['kode_pasien'];


//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_kunjungan values ('$no_reg','$tgl_reg','$unit_tujuan','$kode_pasien')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-kunjungan.php'</script>";
}
?>