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
	

    <div id="body_content" style="border:0px">
	
	<center>
	<img src="http://localhost/puskesmas/images/report.png"/>
	</center>
	<hr style="border:1px solid #000000">
	
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		<?php
		$no_rekmed = trim($_GET['no_rekmed']);
		?>
		
						
						<center><b>LAPORAN HASIL PEMERIKSAAN PASIEN</b></center>
<hr style="border:1px solid #000000">
				

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("SELECT tb_rekmed.no_rekmed, tb_rekmed.kode_pasien,tb_rekmed.id_unitmedis, tb_rekmed.diagnosa1, tb_rekmed.diagnosa2, tb_rekmed.keterangan, tb_rekmed.tanggal, tb_pasien.kode_pasien, tb_pasien.nama_pasien FROM tb_rekmed, tb_pasien WHERE tb_rekmed.kode_pasien = tb_pasien.kode_pasien and no_rekmed='$no_rekmed'");
				$data = mysql_fetch_array($result);
				?>
				
				<table border="0" cellpadding="5" cellspacing="1" width="100%" name="aa">
				<tr>
				<td>Kode Pasien</td>
				<td>:</td>
				<td><strong><?php echo $data['kode_pasien']; ?></strong></td>
				
				<td>No. Rekam Medis</td>
				<td>:</td>
				<td><?php echo $no_rekmed; ?></td>
				
				</tr>
				
				<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><?php echo $data['nama_pasien']; ?></td>
				
				<td></td>
				<td></td>
				<td></td>
				
				</tr>
				
			
				
				</table>
				
				
                <table border="1" cellpadding="5" cellspacing="1" width="100%">
                <tr>
  
				<th style="width:70px">Tgl. Pemeriksaan</th>
				<th style="width:130px">ID. Dokter</th>
				<th style="width:70px">Hasil Pemeriksaan</th>
				<th style="width:70px">Keterangan</th>
				
				
				
                </tr>
            


       
            <tr>
 
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['id_unitmedis']; ?></td>
				<td><?php echo $data['diagnosa1']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?php echo $data['diagnosa2']; ?></td>
				<td></td>
			</tr>
                
                </table>
				
				<table border="0" cellpadding="5" cellspacing="1" width="100%" name="aa">
				
				<tr>
				<td>
				</td>
				<td style="float:right">Diketahui oleh,</td>
				</tr>
				<br/>
				
				<tr>
				<td></td>
				</tr>
				<tr>
				<td></td>
				</tr>
				<tr>
				<td></td>
				</tr>
				
				<tr>
				<td>
				</td>
				<td style="float:right; border-top:1px solid #000000">Bag. Tata Usaha</td>
				</tr>
				
				</table>
			  <br/><br/><br/><br/>
			  
			  
			  
			  
		</table>
    </div>
    

    </div></div>
</body>
</html>
<?php
}
?>