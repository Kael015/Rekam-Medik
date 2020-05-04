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
						<center><b>PENCARIAN DATA KUNJUNGAN : <?php echo $cari ?></b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-kunjungan.php';"value="TAMBAH DATA">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				
				$result = mysql_query("select tb_kunjungan.no_reg,tb_kunjungan.tgl_reg,tb_kunjungan.unit_tujuan,tb_pasien.kode_pasien,tb_pasien.nama_pasien,tb_pasien.jenis_kelamin,tb_pasien.alamat from tb_kunjungan join tb_pasien on tb_pasien.kode_pasien=tb_kunjungan.kode_pasien where no_reg like '%$cari%' or nama_pasien like '%$cari%'");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">No. Reg</th>
                <th style="width:250px">Tgl. Reg</th>
                <th style="width:130px">Unit Tujuan</th>
                <th style="width:70px">Kode Pasien</th>
				<th style="width:70px">Nama Pasien</th>
				<th style="width:70px">Jns. Kelamin</th>
				<th style="width:70px">Alamat</th>
				<th style="width:70px">Status</th>
                <th style="width:130px">Aksi</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $no; ?></td>
				<td><?php echo $data['no_reg']; ?></td>
                <td><?php echo $data['tgl_reg']; ?></td>
                <td><?php echo $data['unit_tujuan']; ?></td>
				<td><?php echo $data['kode_pasien']; ?></td>
				<td><?php echo $data['nama_pasien']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['status_pasien']; ?></td>
                <td><a href="edit-data.php?no_reg=<?php echo $data['no_reg']; ?>"><img src="http://localhost/puskesmas/images/ubah.gif" /></a> | <a href="proses-hapus.php?no_reg=<?php echo $data['no_reg']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></td>
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