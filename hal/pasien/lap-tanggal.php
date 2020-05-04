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
				include "../../koneksi/koneksi.php";
$pertanggal = $_POST['pertanggal'];
?>
		
						
						<center><b>LAPORAN DATA PASIEN TANGGAL : <?php echo $pertanggal;?></b></center>
<hr style="border:1px solid #000000">
				<table border="0" cellpadding="5" cellspacing="1" width="100%">

				
				<?php
				include "../../koneksi/koneksi.php";


				$result = mysql_query("select * from tb_pasien where tanggal = '$pertanggal'") or mysql_error();
				?>
                
                <table width="100%" border="1" cellpadding="5" cellspacing="1">
                <tr>
                <th>No.</th>
				<th style="width:130px">Kd. Pasien</th>
                <th style="width:250px">Nama</th>
                <th style="width:130px">Tgl. Lahir</th>
				<th style="width:70px">Kelamin</th>
				<th style="width:70px">Pekerjaan</th>
				<th style="width:70px">Alamat</th>
				<th style="width:70px">No. Telp</th>
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
				<td style="float:right; border-top:1px solid #000000"><b>Bag. Tata Usaha</b></td>
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