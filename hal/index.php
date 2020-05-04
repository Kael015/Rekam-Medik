<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	echo "<script language='javascript'>alert('Login terlebih dahulu untuk melakukan konten manajemen');
					window.location = '../index.php'</script>";
}
else{

?>

<html>
<head>


	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" />
    
            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
	
	<?php
	include "header.php";
	?>
	
	
    <div id="body_content">
		<table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-left:-11px">
		  <tr>
			<td valign="top">
				
				<?php
					include "sidebar.php";
				?>

			</td>
			<td valign="top" width="660">        <div style="padding:10px 0 10px 0 ">
			<center>
			<img src="../images/body.png"/>
			</center>
			</div>
			</td>
		  </tr>
		</table>
    </div>
    
		<?php
		include "footer.php";
		?>

    </div></div>
</body>
</html>
<?php
}
?>