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
    
            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
	
	<?php
	include "../header.php";
	?>
	
	
    <div id="body_content">
	
	<br/>
	<center><b>INPUT DATA PEGAWAI</b></center>
	<br/>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		 <tr>
			<td valign="top">
				
				<?php
					include "../sidebar.php";
				?>

			</td>
			
			
			<td valign="top" width="660">        <div style="padding:10px 0 10px 0 ">
		
		
		<form action="proses-simpan.php" name="tes" method="post">
		
		
		
		
		
		

		<table width="100%" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		
		
								<?php
			include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT MAX(RIGHT(kode_pegawai,4)) AS terakhir FROM tb_pegawai";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql
  $hasil = mysql_query($sql);
//memecah table hasil query
  $data = mysql_fetch_array($hasil);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastID = $data['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrut = (int) $lastID;
  // nomor urut ditambah 1
  $nextNoUrut = $lastNoUrut + 1;
  // membuat format nomor berikutnya
  $nextID = "PGW".sprintf("%04s",$nextNoUrut);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 
 
 
 
		  <tr>
			<td width="120"><b>KODE PEGAWAI</b></td>
			<td><input name="kode_pegawai" type="text" size="40" value="<?php echo  $nextID;?>"> <em><font color="red">Otomatis</font></em></td>
		  </tr>
		  <tr>
			<td>Nama Pegawai</td>
			<td><input name="nama_pegawai" type="text" size="40" value=""> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Bagian</td>
			<td>
			<select name="nama_bagian" style="width:263px">
		<option value="">....</option>
		<option>Tata Usaha</option>
		<option>Loket Pendaftaran</option>
		<option>Apotik</option>
		</select> <em>harus diisi</em>
		</td>
		  </tr>
		  
		<tr>
		<td>Tgl. Lahir</td>
		<td><input type="text" size="34" name="tanggal_lahir" title="dd-mm-yyyy"   /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.tes.tanggal_lahir);return false;" ><img name="popcal" align="absmiddle" src="../../js/calender/calbtn.gif" width="34" height="22" border="0" alt=""  /></a>
		  <em>harus diisi</em></td>
		</tr>

		<tr>
		<td>Alamat</td>
		<td><input name="alamat" type="text" size="40" value=""> <em>harus diisi</em></td>
		</tr>
		
		<tr>
		<td>No. Telp</td>
		<td><input name="telpon" type="text" size="40" value=""> <em>harus diisi</em></td>
		</tr>
		
	  <tr>
			<td></td>
			<td><input name="simpan" type="submit" value="Simpan"> <input name="batal" type="reset" onClick="location.href='data-pegawai.php';"value="Batal"></td>
		  </tr>
		</table>
		
		
		
		
		
		
		
		
		
		
		
		</form>
		
		<iframe width=174 height=189 name="gToday:normal:../../js/calender/normal.js" id="gToday:normal:../../js/calender/normal.js" src="../../js/calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
		
		
		</div>
		</td>
		</tr>
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