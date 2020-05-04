<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	echo "<script language='javascript'>alert('Login terlebih dahulu untuk melakukan konten manajemen');
					window.location = '../../index.php'</script>";
}
else{

?>

<html>
<head>


	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../css/home.css" rel="stylesheet" type="text/css" media="all" />
    
            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
	
	<?php
	include "../header.php";
	?>
	
	
    <div id="body_content">
	
	<br/>
	<center><b>INPUT DATA OBAT</b></center>
	<br/>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		 <tr>
			<td valign="top">
				
				<?php
					include "../sidebar.php";
				?>

			</td>
			
			
			<td valign="top" width="660">        <div style="padding:10px 0 10px 0 ">
		
		
		<form action="proses-simpan.php" name="" method="post">
		
		
		
		
		
		

		<table width="100%" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		
		
		
				<?php
			include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT MAX(RIGHT(kode_obat,4)) AS terakhir FROM tb_obat";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql
  $hasil = mysql_query($sql);
//memecah table hasil query
  $data = mysql_fetch_array($hasil);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastID = $data['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrut = (int) $lastID;
  // nomor urut ditambah 1
  $nextNoUrut = $lastNoUrut + 1;
  // membuat format nomor berikutnya
  $nextID = "OBT-".sprintf("%04s",$nextNoUrut);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 
 
		  <tr>
			<td width="120"><b>KODE OBAT</b></td>
			<td><input name="kode_obat" type="text" size="40" value="<?php echo $nextID;?>"> <em><font color="red">Otomatis</font></em></td>
		  </tr>
		  <tr>
			<td>Nama Obat</td>
			<td><input name="nama_obat" type="text" size="40" value=""> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Jenis Obat</td>
			<td><input name="jenis" type="text" size="40" value=""> <em>harus diisi</em></td>
		  </tr>
		  
		<tr>
		<td>Satuan</td>
		<td><input name="satuan" type="text" size="40" value=""> <em>harus diisi</em></td>
		</tr>
	
		<tr>
		<td>Jumlah</td>
		<td><input name="jumlah" type="text" size="40" value=""> <em>harus diisi</em></td>
		</tr>
		
		<tr>
		<td>Harga</td>
		<td><input name="harga" type="text" size="40" value=""> <em>harus diisi</em></td>
		</tr>
		

			  <tr>
			<td></td>
			<td><input name="simpan" type="submit" value="Simpan"> <input name="batal" type="reset" onClick="location.href='data-obat.php';"value="Batal"></td>
		  </tr>
		</table>
		
		
		
		
		
		
		
		
		
		
		
		</form>
		
		</div>
		</td>
		</tr>
</table>

    </div>
    
		<?php
		include "../footer.php";
		?>

    </div></div>
</body>
</html>
<?php
}
?>