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
		$no_resep = trim($_GET['no_resep']);
		?>
		
						
						<center><b>RESEP OBAT</b></center>
<hr style="border:1px solid #000000">
				

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("select * from tb_resep where no_resep ='$no_resep'");
				$data = mysql_fetch_array($result);
				
				$tumpul = mysql_query("select * from tb_resep_detail where no_resep ='$no_resep'");
				
				
				
				?>
				
				<table border="0" cellpadding="5" cellspacing="1" width="100%" name="aa">
				<tr>
				<td>No. Resep</td>
				<td>:</td>
				<td><strong><?php echo $no_resep; ?></strong></td>
				
				<td>Tanggal</td>
				<td>:</td>
				<td><?php echo $data['tanggal']; ?></td>
				
				</tr>
				
				<tr>
				<td>No. Rekam Medis</td>
				<td>:</td>
				<td><?php echo $data['no_rekmed']; ?></td>
				
				<td></td>
				<td></td>
				<td></td>
				
				</tr>
				
		
				
				</table>
				
				
                <table border="1" cellpadding="5" cellspacing="1" width="100%">
                <tr>
                <th style="width:50px">No.</th>
				<th>Kode Obat</th>
                <th>Nama Obat</th>
				<th>Qty</th>
				<th>Aturan Pakai</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($hasil = mysql_fetch_array($tumpul)) {
					
                ?>
            <tr>
                <td><center><?php echo $no; ?></center></td>
				<td><?php echo $hasil['kode_obat']; ?></td>
                <td><?php echo $hasil['nama_obat']; ?></td>
                <td><?php echo $hasil['jumlah']; ?></td>
				<td><?php echo $hasil['aturan_pakai']; ?></td>
			</tr>
			<?php
                                $no++;
                }
                ?>
                
                
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
				<td style="float:right; border-top:1px solid #000000"><b>Unit Medis</b></td>
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