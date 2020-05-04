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
		$no_kwitansi = $_GET['no_kwitansi'];
		?>
		
						
						<center><b>KWITANSI PEMBAYARAN</b></center>
<hr style="border:1px solid #000000">
				

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("SELECT tb_kwitansi.no_kwitansi, tb_kwitansi.tanggal, tb_kwitansi.kode_pasien, tb_pasien.kode_pasien,tb_pasien.nama_pasien, tb_kwitansi.kode_pegawai, tb_kwitansi.b_administrasi, tb_kwitansi.b_lain, tb_kwitansi.total_bayar, tb_kwitansi.tunai, tb_kwitansi.kembali FROM tb_kwitansi, tb_pasien WHERE tb_kwitansi.kode_pasien = tb_pasien.kode_pasien and no_kwitansi='$no_kwitansi'");
				$data = mysql_fetch_array($result);
				?>
				
				<table border="0" cellpadding="5" cellspacing="1" width="100%" name="aa">
				<tr>
				<td>No. Kwitansi</td>
				<td>:</td>
				<td><strong><?php echo $data['no_kwitansi']; ?></strong></td>
				
				<td>Kode Pasien</td>
				<td>:</td>
				<td><?php echo $data['kode_pasien']; ?></td>
				
				</tr>
				
				<tr>
				<td>Tgl. Kwitansi</td>
				<td>:</td>
				<td><?php echo $data['tanggal']; ?></td>
				
				<td>Nama Pasien</td>
				<td>:</td>
				<td><?php echo $data['nama_pasien']; ?></td>
				
				</tr>
				
				<tr>
				<td>Kode Pegawai</td>
				<td>:</td>
				<td><?php echo $data['kode_pegawai']; ?></td>
				
				<td></td>
				<td></td>
				<td></td>
				
				</tr>
				
				</table>
				
				
                <table border="1" cellpadding="5" cellspacing="1" width="100%">
                <tr>
  
				<th style="width:70px">Biaya Administrasi</th>
				<th style="width:70px">Biaya Lain</th>
				<th style="width:70px"><font color="red">Total</font></th>
				
				
                </tr>
                
       
            <tr>
 

				<td><?php echo $data['b_administrasi']; ?></td>
				<td><?php echo $data['b_lain']; ?></td>
				<td><strong>Rp.<div style="float:right"><?php echo $data['total_bayar']; ?></div></strong></td>
				
			</tr>
			<tr>
			<td></td>
			<td style="width:70px"><strong>Tunai</strong></td>
			<td><strong>Rp.<div style="float:right"><?php echo $data['tunai']; ?></div></strong></td>
			</tr>
			<tr>
			<td></td>
			<td style="width:70px"><strong>Kembali</strong></td>
			<td><strong>Rp.<div style="float:right"><?php echo $data['kembali']; ?></div></strong></td>
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
				<td style="float:right; border-top:1px solid #000000">Bag. Pendaftaran</td>
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