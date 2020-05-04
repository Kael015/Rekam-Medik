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
						<center><b>DATA KUNJUNGAN PASIEN</b></center>
<hr>

<form action="cari-kunjungan.php" name="pencarian" method="post">

						<em><b>Cari Data (No. Registrasi / Kd. Pasien)</b></em><input style="float:left" type="text" name="cari" >
					</form>	
					
					
						<input style="float:right" type="reset" onClick="location.href='../pasien/input-pasien.php';"value="TAMBAH DATA PASIEN">
				<br/><br/>		
						<input style="float:right" type="reset" onClick="location.href='input-kunjungan.php';"value="TAMBAH DATA KUNJUNGAN PASIEN">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("SELECT tb_kunjungan.no_reg, tb_kunjungan.tgl_reg, tb_kunjungan.unit_tujuan, tb_kunjungan.kode_pasien, tb_pasien.kode_pasien, tb_pasien.nama_pasien, tb_pasien.jenis_kelamin, tb_pasien.alamat FROM tb_kunjungan, tb_pasien WHERE tb_kunjungan.kode_pasien = tb_pasien.kode_pasien");
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
                <td><center><a href="cari-kunjungan.php?no_reg=<?php echo $data['no_reg']; ?>"><img src="http://localhost/puskesmas/images/edit.png" />-<a href="proses-hapus.php?no_reg=<?php echo $data['no_reg']; ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></center></td>
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