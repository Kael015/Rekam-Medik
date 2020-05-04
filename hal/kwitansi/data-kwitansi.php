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
						<center><b>DATA KWITANSI PEMBAYARAN</b></center>
<hr>
						<input style="float:right" type="reset" onClick="location.href='input-kwitansi.php';"value="BUAT KWITANSI BARU">
				<br/><br/>

				<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("select * from tb_kwitansi");
				?>
                <form name="form1" method="post" action="tampil.php">
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">No. Kwitansi</th>
                <th style="width:130px">Tgl. Kwitansi</th>
                <th style="width:130px">Kode Pasien</th>
				<th style="width:70px">Kode Pegawai</th>
				<th style="width:70px">Biaya Administrasi</th>
				<th style="width:70px">Biaya Lain</th>
				<th style="width:70px">Total</th>
				<th style="width:70px">Tunai</th>
				<th style="width:70px">Kembali</th>
                <th style="width:50px">Cetak</th>
                </tr>
                
                <?php
				include "../../koneksi/koneksi.php";
                

                $no = 1;

                while ($data = mysql_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $no; ?></td>
				<td><?php echo $data['no_kwitansi']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['kode_pasien']; ?></td>
				<td><?php echo $data['kode_pegawai']; ?></td>
				<td><?php echo $data['b_administrasi']; ?></td>
				<td><?php echo $data['b_lain']; ?></td>
				<td><?php echo $data['total_bayar']; ?></td>
				<td><?php echo $data['tunai']; ?></td>
				<td><?php echo $data['kembali']; ?></td>
                <td><center><a href="kwitansi.php?no_kwitansi=<?php echo $data['no_kwitansi']; ?>" target="blank"><img src="http://localhost/puskesmas/images/print.png" /></a></center></td>
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