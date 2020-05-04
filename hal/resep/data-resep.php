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
						<center><b>DATA RESEP OBAT</b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-resep.php';"value="TAMBAH DATA RESEP OBAT">
				<p></p>

				<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("select * from tb_resep");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table border="1" cellpadding="5" cellspacing="1" width="100%">
                <tr>
                <th style="width:50px">No.</th>
				<th style="width:130px">No. Resep</th>
                <th style="width:130px">No. Rekam Medis</th>
				<th style="width:130px">Tgl. Resep</th>
                <th style="width:70px">Aksi</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><center><?php echo $no; ?></center></td>
				<td><?php echo $data['no_resep']; ?></td>
                <td><?php echo $data['no_rekmed']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
                <td><center><a href="resep.php?no_resep=<?php echo trim($data['no_resep']); ?>" target="blank"><img src="http://localhost/puskesmas/images/print.png" /></a> | <a href="tampil-resep.php?no_resep=<?php echo trim($data['no_resep']); ?>"><img src="http://localhost/puskesmas/images/tut.png" /></a>| <a href="hapus-resep.php?no_resep=<?php echo $data['no_resep']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" "></a></center></td>
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