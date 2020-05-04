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
<!-- ============= awal Auto complete ================ -->
<link rel="stylesheet" href="../../css/style2.css" />
    <link rel="stylesheet" href="../../css/jquery-ui.css" />
    <script src="../../js/jquery-1.8.3.js"></script>
    <script src="../../js/jquery-ui.js"></script>
 
    <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() {  
        $( "#nama_obat" ).autocomplete({
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
	<center><b>INPUT DATA RESEP OBAT</b></center>
	<hr>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">
		
		
		
		
<tr>

<td>
<font style="color:white">...</font>
</td>



	
	
	
<td>




<form action="proses-tambah.php" name="" method="post">
<table width="100%" border="1" cellpadding="5" cellspacing="1">


						<?php
			include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sqlx ="SELECT MAX(RIGHT(no_resep,4)) AS terakhir FROM tb_resep";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql
  $hasilx = mysql_query($sqlx);
//memecah table hasil query
  $datax = mysql_fetch_array($hasilx);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastIDx = $datax['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrutx = (int) $lastIDx;
  // nomor urut ditambah 1
  $nextNoUrutx = $lastNoUrutx + 1;
  // membuat format nomor berikutnya
  $nextIDx = "RSP-".sprintf("%04s",$nextNoUrutx);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 <input name="no_resep" type="text" value="<?php echo $nextIDx; ?>" style="display: none"> 
 
				
		
		
		
		<tr>
		<th>Nama Obat</th>
		<td><input type="text" name="nama_obat" id="nama_obat" onClick="kdObat(this.value)" placeholder="ketik nama obat" >
		<!-- 
		<select name="nama_obat" id="nama_obat" onChange="kdObat(this.value)" >
        <option value=0>-Pilih-</option>
        <?php
		include "../../koneksi/koneksi.php";
    $result = mysql_query("select * from tb_obat");   
    $jsArray = "var dt_obat = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['nama_obat'] . '">' . $row['nama_obat'] . '</option>';   
        $jsArray .= "dt_obat['" . $row['nama_obat'] . "'] = {kode_obat:'" . addslashes($row['kode_obat']) . "',jenis:'".addslashes($row['jenis'])."',jumlah:'".addslashes($row['jumlah'])."'};\n";   
    }     
    ?>   
       </select> -->
		<em>harus diisi</em>
		</td>
		</tr>
		
		
		
		
			<tr>
		<td>Kode Obat</td>
		<td><input name="kode_obat" id="kode_obat"type="text" size="35" value=""> <em><font style="color:red">Otomatis</font></em></td>
		</tr>
		
		<tr>
		<td>Jenis Obat</td>
		<td><input name="jenis" id="jenis" type="text" size="35" value=""> <em><font style="color:red">Otomatis</font></em></td>
		</tr>

		
		<tr>
		<td>Sisa Stok</td>
		<td><input name="jumlah" id="jumlah" type="text" size="35" value=""> <em><font style="color:red">Otomatis</font></em></td>
		</tr>
		
		<tr>
		<td>QTY</td>
		<td><input name="qty" type="text" size="35" value=""> <em>Harus diisi</em></td>
		</tr>
		
		<tr>
		<td>Aturan Pakai</td>
		<td><input name="aturan_pakai" type="text" size="35" value=""> <em>Harus diisi</em></td>
		</tr>
		
		
		<tr>
		<td></td>
		<td><center><input name="tambah" type="submit" value="Tambah"></center></td>
		</tr>
		
		
	<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function kdObat(nama_obat){ 
    document.getElementById('kode_obat').value = dt_obat[nama_obat].kode_obat; 
    document.getElementById('jenis').value = dt_obat[nama_obat].jenis; 
	document.getElementById('jumlah').value = dt_obat[nama_obat].jumlah; 
    }; 
    </script>
		
	
	
	
</table>
</form>



				</td>
				
				
				
				
					
<td>
<font style="color:white">...</font>
</td>
	
	
	
	
<td>
		<form action="proses-simpan.php" name="" method="post">
		
		
		
		
		
		

		 <table width="100%" border="1" cellpadding="5" cellspacing="1">
		
		
		
		<?php
			include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT MAX(RIGHT(no_resep,4)) AS terakhir FROM tb_resep";
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
  $nextID = "RSP-".sprintf("%04s",$nextNoUrut);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 
 
		  <tr>
			<th width="120"><b>NO. RESEP</b></th>
			<th><input name="no_rosop" type="text" size="15" value=" <?php echo  $nextID;?>" disabled></th>
			<input name="no_resepx" type="hidden" size="15" value=" <?php echo  $nextID;?>">
		  </tr>
		   
		  
			<tr>
		<td>No. Rekam Medis</td>
		<td>
		<select name="no_rekmed" id="no_rekmed" onChange="noRekmed(this.value)" >
        <option value=0>-Pilih-</option>
        <?php
		include "../../koneksi/koneksi.php";
    $resul = mysql_query("select * from tb_rekmed");   
    $jsArrayz = "var dt_rekmed = new Array();\n";       
    while ($row = mysql_fetch_array($resul)) {   
        echo '<option value="' . $row['no_rekmed'] . '">' . $row['no_rekmed'] . '</option>';   
        $jsArrayz .= "dt_rekmed['" . $row['no_rekmed'] . "'] = {nama_pasien:'" . addslashes($row['nama_pasien']) . "'};\n";   
    }     
    ?>   
        </select> <em>harus diisi</em>
		</td>
		</tr>
		
		<tr>
		<td>Nama Pasien</td>
		<td><input name="nama_pasien" id="nama_pasien" type="text" value="" disabled> <em><font style="color:red">Otomatis</font></em></td>
		</tr>
		
		
		 <script type="text/javascript">   
    <?php echo $jsArrayz; ?> 
    function noRekmed(no_rekmed){ 
    document.getElementById('nama_pasien').value = dt_rekmed[no_rekmed].nama_pasien; 

    }; 
    </script>

	
				  <?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-d", $tanggal);
?>

<tr>
		<th>::::</th>
		<th>::::</th>
		</tr>
		
		<tr>
		<td>Tanggal Resep</td>
		<td><input name="tanggal" id="tanggal"type="text" size="10" value="<?php echo $tglsekarang;?>"> <em><font style="color:red">Otomatis</font></em></td>
		</tr>
		<tr>
		<th>::::</th>
		<th>::::</th>
		</tr>
<tr>
			<td><center><input name="simpan" type="submit" value="Simpan"></center></td><td><center><input name="batal" type="reset" value="Batal"></center></td>
	</tr>	   
		</table>
		
		

		
		
		
		
		</form>
	</td>	
	


		</tr>
		
		
		
		
		
		
	<tr>

	
	
			<?php
			include "../../koneksi/koneksi.php";
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sqlz ="SELECT MAX(RIGHT(no_resep,4)) AS terakhir FROM tb_resep";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql
  $hasilz = mysql_query($sqlz);
//memecah table hasil query
  $dataz = mysql_fetch_array($hasilz);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastIDz = $dataz['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrutz = (int) $lastIDz;
  // nomor urut ditambah 1
  $nextNoUrutz = $lastNoUrutz + 1;
  // membuat format nomor berikutnya
  $nextIDz = "RSP-".sprintf("%04s",$nextNoUrutz);
// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
 ?>
 
 
 
 
		<?php
				include "../../koneksi/koneksi.php";
				$result = mysql_query("select * from tb_resep_detail where no_resep = '$nextIDz'");
				?>
		                <table width="100%" border="1" cellpadding="5" cellspacing="1">
						<b>Tabel Keranjang</b>
						<hr>
                <tr>
                <th>No.</th>
				<th>Kode Obat</th>
                <th>Nama Obat</th>
				<th>Qty</th>
				<th>Aturan Pakai</th>
                <th>Aksi</th>
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
                <td><center><a href="proses-hapus.php?kode_obat=<?php echo trim($data['kode_obat']); ?>"><img src="http://localhost/puskesmas/images/hapus.png" /></a></center></td>
			</tr>
			<?php
                                $no++;
                }
                ?>
                
                
                </table>
				
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