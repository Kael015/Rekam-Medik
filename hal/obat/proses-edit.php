<?php
/* memasukkan koneksi*/
require_once("../../koneksi/koneksi.php");
//include "koneksi.php";
/* memanggil variable dan nilai – nilai nya .*/
if(isset($_POST['simpan'])){
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat']; 
$jenis = $_POST['jenis'];
$satuan = $_POST['satuan'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

//memasukkan nilai nilai ke dalam table

$ubah = mysql_query("update tb_obat set nama_obat = '$nama_obat', jenis = '$jenis', satuan = '$satuan', jumlah = '$jumlah', harga = '$harga' where kode_obat = '$kode_obat'");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='data-obat.php'</script>";
}
?>