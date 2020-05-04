<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$no_kwitansi = $_POST['no_kwitansi'];
$tanggal = $_POST['tanggal']; 
$kode_pasien = $_POST['kode_pasien'];
$kode_pegawai = $_POST['kode_pegawai'];
$b_administrasi = $_POST['b_administrasi'];
$b_lain = $_POST['b_lain'];
$total_bayar = $_POST['total_bayar'];
$tunai = $_POST['tunai'];
$kembali = $_POST['kembali'];

//memasukkan nilai nilai ke dalam table
$simpan = mysql_query("insert into tb_kwitansi values ('$no_kwitansi','$tanggal','$kode_pasien','$kode_pegawai','$b_administrasi','$b_lain','$total_bayar','$tunai','$kembali')");

//$simpon = mysql_query("insert into t_keluarga_aset(no_ktp,menurut_dinding,menurut_lantai,menurut_atap,kategori) values ('$no_ktp','$dinding
//','$lantai','$atap','$kategori')");

echo"
<center><strong><a href='kwitansi.php?no_kwitansi=$no_kwitansi' target='blank'>CETAK KWITANSI</a> | 
<a href='data-kwitansi.php'>DATA KWITANSI</a>  | 
<a href='input-kwitansi.php'>INPUT KWITANSI</a></strong></center>";
}
?>