<?php 
	/*
	Pengaturcara		: Mohd. Hafidz bin Abdul Kadir
	Tujuan Aturcara		: Membangunkan web mobile dengan sokongan PHP, HTML5, JQuery dan CSS3
	Tarikh Dibangunkan	: 17 Februari 2014
	Tarikh Kemaskini	: -
	Nota				: Bahagian Asas
	*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/mystyle.css" type="text/css"/>
		<link rel="stylesheet" href="css/jquery.mobile.icons-1.4.0.min.css" type="text/css"/>
		<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.0.min.css" />
		<script text="text/javascript" src="js/jquery.min.js"></script>
		<script text="text/javascript" src="js/jquery.mobile.min.js"></script>
		<script text="text/javascript">
		</script>
	</head>
	<body>
		<!--Mula Halaman : Utama -->
		<div data-role="page" id="utama">
			<!--Mula Ruangan Kandungan-->
			<div align="center" style="margin-top: 60%;">	
				<img src="images/logo.jpg" alt="" />
			</div>	
			<div align="center" style="margin: 0% 0% 24% 0%;">
				<p><b>Maklumat Pegawai BPM<b></p>
				<a href="php/menu/01_fungsi.php" class="ui-btn ui-btn-inline ui-corner-all">Masuk</a>
			</div>
			<!--Tamat Ruangan Kandungan-->
		</div>
		<!--Tamat Halaman : Utama-->
		
		<!--Mula Halaman : Senarai Fungsi-->
		<?php include "php/menu/01_fungsi.php"; ?>	
		<!--Tamat Halaman : Senarai Fungsi-->
		
		<!--Mula Halaman : Info Sistem-->
		<?php include "php/menu/02_info.php"; ?>	
		<!--Tamat Halaman : Info Sistem-->		
	</body>
</html>