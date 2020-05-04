<link href="../../css/home.css" rel="stylesheet" type="text/css" media="all" />
<center>
<div id="body_laporan">
<br/><br/>
<center>
<hr>
<b>CETAK LAPORAN DATA PASIEN</b>
<hr>




<br/>
		  <b>LAPORAN PERTANGGAL</b>
		  

<form action="lap-tanggal.php" method="post" name="tanggal">
<table>
<tr>
			<td>Tanggal</td>
			<td><input type="text" size="20" name="pertanggal" title="dd-mm-yyyy"   /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.tanggal.pertanggal);return false;" ><img name="popcal" align="absmiddle" src="../../js/calender/calbtn.gif" width="34" height="22" border="0" alt=""  /></a>
</td>
		  </tr>
		  <tr>
		  <td></td>
		  <td><input type="submit" name="cetak_tanggal" value="CETAK LAPORAN PERTANGGAL"></td>
		  </tr>
		</table>  
		  </form>
		  
		  
		  
		  
		  
		  <br/>
		  <b>LAPORAN PERBULAN</b>
		  
		  
		  <form action="lap-bulan.php" method="post" name="bulan">
<table>
<tr>

			<td>Bulan</td>
		<td>
		<select name="perbulan">
		<option value="">....</option>
		<option>01</option>
		<option>02</option>
		<option>03</option>
		<option>04</option>
		<option>05</option>
		<option>06</option>
		<option>07</option>
		<option>08</option>
		<option>09</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		</select> <em>harus diisi</em>
		</td>
		  </tr>
		  
		  <tr>
		  <td>Tahun</td>
			<td><input type="text" size="20" name="tahun" >
			</tr>
			
			
		  <tr>
		  <td></td>
		  <td><input type="submit" name="cetak_bulan" value="CETAK LAPORAN PERBULAN"></td>
		  </tr>
		</table>  
		  </form>
		  
		  
		  
		  
		  <br/>
		 <b>LAPORAN PERTAHUN</b>
		  
		  
		  
		  
		  <form action="lap-pasien.php" method="post" name="tahun">
<table>
<tr>
			<td>Pertahun</td>
			<td><input type="text" size="20" name="pertahun" >
</td>
		  </tr>
		  <tr>
		  <td></td>
		  <td><input type="submit" name="cetak_tahun" value="CETAK LAPORAN PERTAHUN"></td>
		  </tr>
		</table>  
		  </form>
		  
		  
		  
		  
		  
		  
		<iframe width=174 height=189 name="gToday:normal:../../js/calender/normal.js" id="gToday:normal:../../js/calender/normal.js" src="../../js/calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
		
		
		  </center>
		  
		  </div>
		  </center>