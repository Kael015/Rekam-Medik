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
    <link href="../../css/table.css" rel="stylesheet" type="text/css" media="all" />
            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
<br/>
<br/>
<center>
    <div id="body_kartu">
	
	<center>
	<img src="http://localhost/puskesmas/images/kartu.png"/>
	</center>
	<hr style="border:1px solid #000000">
	
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		<?php
		$kode_pasien = trim($_GET['kode_pasien']);
		?>
		
						
						<center><font size="2"><b>KARTU BEROBAT</b></font></center>
<hr style="border:1px solid #000000">
				

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("select * from tb_pasien where kode_pasien='$kode_pasien'");
				$data = mysql_fetch_array($result);
				?>
				
				<table border="0" cellpadding="0" cellspacing="1" width="100%" name="aa">
				<tr>
				<td><font size="2">Kode Pasien</font></td>
				<td><font size="2">:</font></td>
				<td><font size="2"><strong><?php echo $data['kode_pasien']; ?></strong></font></td>
				
			
				</tr>
				
				<tr>
				<td><font size="2">Nama</font></td>
				<td><font size="2">:</font></td>
				<td><font size="2"><?php echo $data['nama_pasien']; ?></font></td>
				</tr>
				
				<tr>
				<td><font size="2">Jenis Kelamin</font></td>
				<td><font size="2">:</font></td>
				<td><font size="2"><?php echo $data['jenis_kelamin']; ?></font></td>
				</tr>
				
				<tr>
				<td><font size="2">Tgl. Lahir</font></td>
				<td><font size="2">:</font></td>
				<td><font size="2"><?php echo $data['tanggal_lahir']; ?></font></td>
				</tr>
				
				<tr>
				<td><font size="2">Alamat</font></td>
				<td><font size="2">:</font></td>
				<td><font size="2"><?php echo $data['alamat']; ?></font></td>
				</tr>
				
				</table>
				
				<strong>
<center><font size="2">Kartu ini harap dibawa setiap kali berobat<br/><i>Semoga Anda Lekas Sembuh</i></font></center>
			  </strong>
			  
			  
		</table>
    </div>
    </center>

    </div></div>
</body>
</html>
<?php
}
?>