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
	
	
	<?php
	include "../header.php";
	?>
	
	
    <div id="body_content">
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		
		
		

						<br/>
						<center><b>DATA REKAM MEDIS PASIEN</b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-rekmed.php';"value="TAMBAH DATA REKAM MEDIS">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("select * from tb_rekmed");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">No. Rekam Medis</th>
                <th style="width:130px">Kode Pasien</th>
                <th style="width:130px">ID. Unit Medis</th>
				<th style="width:70px">Diagnosa 1</th>
				<th style="width:70px">Diagnosa 2</th>
				<th style="width:70px">Keterangan</th>
				<th style="width:70px">Tanggal</th>
                <th style="width:130px">Aksi</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $no; ?></td>
				<td><?php echo $data['no_rekmed']; ?></td>
                <td><?php echo $data['kode_pasien']; ?></td>
				<td><?php echo $data['id_unitmedis']; ?></td>
				<td><?php echo $data['diagnosa1']; ?></td>
				<td><?php echo $data['diagnosa2']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
                <td><center><a href="hasil.php?no_rekmed=<?php echo $data['no_rekmed']; ?>" target="blank"><img src="http://localhost/puskesmas/images/print.png" /></a> | <a href="proses-hapus.php?no_rekmed=<?php echo $data['no_rekmed']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
			</tr>
			<?php
                                $no++;
                }
                ?>
                
                
                </table>
                </form>
			  <br/><br/><br/><br/>
			  

			  
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