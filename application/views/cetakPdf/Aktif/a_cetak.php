<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Laporan</title>
	<?php 
		//EXTERNAL CSS 
			require_once(APPPATH.'views/_partials/_css_pdf.php');
		//CONFIGURASI
			require_once(APPPATH.'views/cetakPdf/Aktif/a_config.php');
			require_once(APPPATH.'views/cetakPdf/Aktif/a_identitas.php');
		//ISI TABEL
			require_once(APPPATH.'views/cetakPdf/Aktif/a_hasil.php');
	    //CONFIGURASI FOOTER
	        require_once(APPPATH.'views/cetakPdf/Aktif/cetakFooter.php');
	?>	
	</body>
</html>