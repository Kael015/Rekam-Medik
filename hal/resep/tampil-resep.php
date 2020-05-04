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

		<?php
		$no_resep = $_GET['no_resep'];
		?>
		
						<br/>
						<center><b>DETAIL RESEP OBAT : <?php echo $no_resep; ?></b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='data-resep.php';"value="KEMBALI">
				<p></p>`


				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("select kode_obat, nama_obat, jumlah, aturan_pakai from tb_resep_detail WHERE no_resep = '$no_resep'") or die(mysql_error());
				
				?>
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

                while ($data = mysql_fetch_array($result)) {
					
                ?>
            <tr>
                <td><center><?php echo $no; ?></center></td>
				<td><?php echo $data['kode_obat']; ?></td>
                <td><?php echo $data['nama_obat']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['aturan_pakai']; ?></td>
			</tr>
			<?php
                                $no++;
                }
                ?>
                
                
                </table>
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