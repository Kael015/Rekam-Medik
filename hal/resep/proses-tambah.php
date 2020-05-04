<?php

require_once("../../koneksi/koneksi.php");

if(isset($_POST['tambah'])){
$no_resep = $_POST['no_resep'];
$kode_obat = $_POST['kode_obat']; 
$nama_obat = $_POST['nama_obat'];
$stok = $_POST['jumlah'];
$qty = $_POST['qty'];
$jumlah = $_POST['jumlah'];
$aturan_pakai = $_POST['aturan_pakai'];

$sisa = $jumlah - $qty;

$simpan = mysql_query("insert into tb_resep_detail (no_resep,kode_obat,nama_obat,jumlah,aturan_pakai) values ('$no_resep','$kode_obat','$nama_obat','$qty','$aturan_pakai')") or die(mysql_error());
$ubah = mysql_query("update tb_obat set jumlah = '$sisa' where kode_obat = '$kode_obat'");

if ($simpan) { echo"<script>window.location='input-resep.php'</script>"; }
else { echo"<script>window.alert('Data $kode_obat GAGAL ditambah!!!')
window.location='input-resep.php'</script>"; }

} 

else{
	echo"<script>window.alert('Data Tidak Tersimpan')
window.location='input-resep.php'</script>";
}
?>