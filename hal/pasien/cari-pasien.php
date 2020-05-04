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
$cari = $_POST['cari'];
?>
						<br/>
						<center><b>PENCARIAN DATA PASIEN : <?php echo $cari ?></b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-pasien.php';"value="TAMBAH DATA">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("select * from tb_pasien where kode_pasien like '%$cari%' or nama_pasien like '%$cari%'");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">Kd. Pasien</th>
                <th style="width:180px">Nama</th>
                <th style="width:130px">Tgl. Lahir</th>
				<th style="width:70px">Kelamin</th>
				<th style="width:70px">Pekerjaan</th>
				<th style="width:70px">Alamat</th>
				<th style="width:70px">No. Telp</th>
                <th style="width:200px">Aksi</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $no; ?></td>
				<td><?php echo $data['kode_pasien']; ?></td>
                <td><?php echo $data['nama_pasien']; ?></td>
                <td><?php echo $data['tanggal_lahir']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['pekerjaan']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['telpon']; ?></td>
                <td><center><a href="kartu.php?kode_pasien=<?php echo $data['kode_pasien']; ?>" target="blank"><img src="http://localhost/puskesmas/images/print.png" /></a> | <a href="edit-data.php?kode_pasien=<?php echo $data['kode_pasien']; ?>"><img src="http://localhost/puskesmas/images/ubah.gif" /></a> | <a href="proses-hapus.php?kode_pasien=<?php echo $data['kode_pasien']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
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