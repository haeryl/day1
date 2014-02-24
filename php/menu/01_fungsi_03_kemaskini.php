<div data-role="page" id="kemaskini">
	<?php include "01_fungsi_99_left.php"; ?>
	<!--Mula Ruangan Atas-->
	<div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Kembali">
		<a href="#left_menu" data-icon="bars" data-iconpos="notext">Panel</a>	
		<h3>Kemaskini Rekod</h3>
	</div>
	<!--Tamat Ruangan Atas-->
	<!--Mula Ruangan Kandungan-->
	<div role="main" class="ui-content">
		
		<!-- your form start here -->
		<hr/>
		<a href="#dialog_kemaskini" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b">Simpan</a>
		<div data-role="popup" id="dialog_kemaskini" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
			<div data-role="header" data-theme="a">
			<h1>Perhatian</h1>
			</div>
			<div role="main" class="ui-content">
				<p>Rekod pengguna telah berjaya dikemaskini.</p>
				<p>Anda ingin mengemaskini rekod lagi?</p>
				<a href="01_fungsi_03_kemaskini.php" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-transition="flow">Ya</a>
				<a href="01_fungsi.php" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-transition="flow">Tidak</a>
			</div>
		</div>
	</div>
	<!--Tamat Ruangan Kandungan-->
	<!--Mula Ruangan Bawah-->
	<?php include "01_fungsi_99_bottom.php"; ?>
	<!--Tamat Ruangan Bawah-->
</div>