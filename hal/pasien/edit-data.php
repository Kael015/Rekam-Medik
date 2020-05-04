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
$kode_pasien = $_GET['kode_pasien'];
$result = mysql_query("select * from tb_pasien where kode_pasien='$kode_pasien'");
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
			<td width="120"><b>KODE PASIEN</b></td>
			<td><input name="kode_pasien" type="text" size="40" value="<?php echo $data['kode_pasien']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Nama Pasien</td>
			<td><input name="nama_pasien" type="text" size="40" value="<?php echo $data['nama_pasien']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Tgl. Lahir</td>
			<td><input name="tanggal_lahir" type="text" size="40" value="<?php echo $data['tanggal_lahir']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  
		<tr>
		<td>Jenis Kelamin</td>
		<td>
		<select name="jenis_kelamin" id="jenis_kelamin">

<?php echo $data['jenis_kelamin']; 

if ($data['jenis_kelamin'] == "Laki-laki") echo "<option>....</option>
<option value='Laki-laki' selected>Laki-laki</option>
<option>Perempuan</option>"; 
else if ($data['jenis_kelamin'] == "Perempuan") echo "<option>....</option>
<option>Laki-laki</option>
<option value='Perempuan' selected>Perempuan</option>"; 
?>
</select><em>harus diisi</em>
		</td>
		</tr>
		
		<tr>
		<td>Pekerjaan</td>
		<td><input name="pekerjaan" type="text" size="40" value="<?php echo $data['pekerjaan']; ?>"> <em>harus diisi</em></td>
		</tr>
		
		<tr>
		<td>Alamat</td>
		<td><input name="alamat" type="text" size="40" value="<?php echo $data['alamat']; ?>"> <em>harus diisi</em></td>
		</tr>
		
		<tr>
		<td>No. Telp</td>
		<td><input name="telpon" type="text" size="40" value="<?php echo $data['telpon']; ?>"> <em>harus diisi</em></td>
		</tr>
		
			  <tr>
			<td></td>
			<td><input name="simpan" type="submit" value="Simpan"> <input name="batal" type="reset" onClick="location.href='data-pasien.php';"value="Batal"></td>
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