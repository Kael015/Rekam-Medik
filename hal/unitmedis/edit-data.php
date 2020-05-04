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
	<center><b>UBAH DATA UNIT MEDIS</b></center>
	<br/>
	
	                <?php
				include "../../koneksi/koneksi.php";
$id_unitmedis = $_GET['id_unitmedis'];
$result = mysql_query("select * from tb_unitmedis where id_unitmedis='$id_unitmedis'");
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
			<td width="120"><b>ID> Unit Medis</b></td>
			<td><input name="id_unitmedis" type="text" size="40" value="<?php echo $data['id_unitmedis']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Nama Unit Medis</td>
			<td><input name="nama_unitmedis" type="text" size="40" value="<?php echo $data['nama_unitmedis']; ?>"> <em>harus diisi</em></td>
		  </tr>
		  			  
		  <tr>
			<td>Spesialis</td>
			<td><input name="spesialis" type="text" size="40" value="<?php echo $data['spesialis']; ?>"> <em>harus diisi</em></td>
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
			<td><input name="simpan" type="submit" value="Simpan"> <input name="batal" type="reset" onClick="location.href='data-unitmedis.php';"value="Batal"></td>
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