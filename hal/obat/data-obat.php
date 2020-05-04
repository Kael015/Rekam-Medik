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
						<center><b>DATA OBAT</b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-obat.php';"value="TAMBAH DATA OBAT">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("select * from tb_obat");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">Kode Obat</th>
                <th style="width:250px">Nama Obat</th>
                <th style="width:130px">Jenis</th>
                <th style="width:70px">Satuan</th>
				<th style="width:70px">Jumlah</th>
				<th style="width:70px">Harga</th>
                <th style="width:130px">Aksi</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $no; ?></td>
				<td><?php echo $data['kode_obat']; ?></td>
                <td><?php echo $data['nama_obat']; ?></td>
                <td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['satuan']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['harga']; ?></td>
                <td><center><a href="edit-data.php?kode_obat=<?php echo $data['kode_obat']; ?>"><img src="http://localhost/puskesmas/images/ubah.gif" /></a> | <a href="proses-hapus.php?kode_obat=<?php echo $data['kode_obat']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
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