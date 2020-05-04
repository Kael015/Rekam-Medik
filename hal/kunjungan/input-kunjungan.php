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
<!-- ============= awal Auto complete ================ -->
<link rel="stylesheet" href="../../css/style2.css" />
    <link rel="stylesheet" href="../../css/jquery-ui.css" />
    <script src="../../js/jquery-1.8.3.js"></script>
    <script src="../../js/jquery-ui.js"></script>
 
    <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() {  
        $( "#nama_pasien" ).autocomplete({
         source: "data.php",  
           minLength:2, 
        });
    });
    </script>    
<!-- ============= akhir Auto complete ================ -->        
            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
	
	<?php
	include "../header.php";
	?>
	
	
    <div id="body_content">
	
	<br/>
	<center><b>INPUT DATA KUNJUNGAN PASIEN</b></center>
	<br/>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">

		 <tr>
			<td valign="top">
				
				<?php
					include "../sidebar.php";
				?>

			</td>
			
			
			<td valign="top" width="660">        <div style="padding:10px 0 10px 0 ">
		
		
		<form action="proses-simpan.php" name="" method="post">
		
		
		
		
		
		

		<table width="100%" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		
		
		
<?php
include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT MAX(RIGHT(no_reg,3)) AS terakhir FROM tb_kunjungan";
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
  $nextID = "REG-".sprintf("%03s",$nextNoUrut);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 
 
		  <tr>
			<td width="120"><b>No. Reqistrasi</b></td>
			<td><input name="no_ndut" type="text" size="40" value="<?php echo  $nextID;?>" disabled> <em><font color="red">Otomatis</font></em></td>
			<input name="no_reg" type="hidden" size="40" value="<?php echo  $nextID;?>">
		  </tr>
		  
		  
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
?>


		  <tr>
			<td>Tgl. Registrasi</td>
			<td><input name="tgl_reg" type="text" size="40" value="<?php echo $tglsekarang; ?>"> <em><font color="red">Otomatis</font></em></td>
		  </tr>
		  
		  

		  
		  
		  <tr>
		<td>Unit Tujuan</td>
		<td>
		<select name="unit_tujuan" id="unit_tujuan" style="width:263px">
		<option value="">....</option>
		<option>Poli KIA / KB</option>
		<option>Poli Umum</option>
		<option>Poli Gigi</option>
		<option>IGD</option>
		</select> <em>harus diisi</em>
		</td>
		</tr>
		
				
		<tr>
		<td>Nama Pasien</td>
		<td><input type="text" name="nama_pasien" id="nama_pasien" onchange="changeValue(this.value)" placeholder="ketik nama" style="width:263px" value="">
		<!-- 
		
        <?php
		include "../../koneksi/koneksi.php";
    $result = mysql_query("select * from tb_pasien");   
    $jsArray = "var dt_pasien = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['nama_pasien'] . '">' . $row['nama_pasien'] . '</option>';   
        $jsArray .= "dt_pasien['" . $row['nama_pasien'] . "'] = {kode_pasien:'" . addslashes($row['kode_pasien']) . "',jenis_kelamin:'".addslashes($row['jenis_kelamin'])."',alamat:'".addslashes($row['alamat'])."'};\n";   
    }     
    ?>
       </select> -->
		<em>Harus Diisi</em></td>
		</tr>


		<tr>
		<td>Kode Pasien</td>
		<td>
		<input name="kode_pasien" id="kode_pasien" type="text" style="width:263px" value="" ><em><font color="red">Otomatis</font></em>
		</td>
		</tr>
		
		
		
		
		<tr>
		<td>Jenis Kelamin</td>
		<td>
		<select name="jenis_kelamin" id="jenis_kelamin" style="width:263px" disabled>
		<option value="">....</option>
		<option>Laki-laki</option>
		<option>Perempuan</option>
		</select> <em><font color="red">Otomatis</font></em>
		</td>
		</tr>
		
		<tr>
		<td>Alamat</td>
		<td><input name="alamat" id="alamat" type="text" size="40" value="" disabled> <em><font color="red">Otomatis</font></em></td>
		</tr>
		

		
		
			  <tr>
			<td></td>
			<td><input name="simpan" type="submit" value="Simpan"> <input name="batal" type="reset" onClick="location.href='data-kunjungan.php';"value="Batal"></td>
		  </tr>
		</table>
		
		
		
	<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(nama_pasien){ 
    document.getElementById('kode_pasien').value = dt_pasien[nama_pasien].kode_pasien; 
	document.getElementById('jenis_kelamin').value = dt_pasien[nama_pasien].jenis_kelamin; 
	document.getElementById('alamat').value = dt_pasien[nama_pasien].alamat; 
    }; 
    </script>

		
		
		
		
		
		
		</form>
		
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