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
	<center><b>UBAH DATA PASIEN</b></center>
	<br/>
	
	                <?php
				include "../../koneksi/koneksi.php";
$kode_obat = $_GET['kode_obat'];
$result = mysql_query("select * from tb_obat where kode_obat='$kode_obat'");
$data = mysql_fetch_array($result);


?>





		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">
		
		
				 <tr>
			<td valign="top">
				
				<?php
					include "../sidebar.php";
				?>

			</td>
			
			
			<td valign="top" width="660">        <div style="padding:10px 0 10px 0 ">
		
		
		

<form name="form1" method="post" action="proses-edit.php">
				

		
		
		
		

		<table width="100%" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		  <tr>
			<td width="120"><b>KODE OBAT</b></td>
			<td><input name="kode_obat" type="text" size="40" value="<?php echo $data['kode_obat']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Nama Obat</td>
			<td><input name="nama_obat" type="text" size="40" value="<?php echo $data['nama_obat']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Jenis Obat</td>
			<td><input name="jenis" type="text" size="40" value="<?php echo $data['jenis']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  
		<tr>
		<td>Satuan</td>
		<td><input name="satuan" type="text" size="40" value="<?php echo $data['satuan']; ?>"> <em>harus diisi</em></td>
		</tr>
	
		<tr>
		<td>Jumlah</td>
		<td><input name="jumlah" type="text" size="40" value="<?php echo $data['jumlah']; ?>"> <em>harus diisi</em></td>
		</tr>
		
		<tr>
		<td>Harga</td>
		<td><input name="harga" type="text" size="40" value="<?php echo $data['harga']; ?>"> <em>harus diisi</em></td>
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