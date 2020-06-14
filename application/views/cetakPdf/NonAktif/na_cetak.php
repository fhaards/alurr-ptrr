<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Laporan</title>
	<?php 
		//EXTERNAL CSS 
		require_once(APPPATH.'views/_partials/_css_pdf.php');
		//CONFIGURASI & HEADER
		require_once(APPPATH.'views/cetakPdf/NonAktif/na_config.php');
		require_once(APPPATH.'views/cetakPdf/NonAktif/na_identitas.php');
	?>
		<table border="1" class="table-content" >
		  <tr>
		      <th style="width:5%;"> 
		        No 
		      </th>
		      <th>
		         JENIS PENGUJIAN  <br>
		         <i>(Paremeters)</i> 
		      </th>
		      <th> 
		         STANDART <br> 
		         KEBERTERIMAAN <br>
		         <i>(Range)</i>
		      </th>
		      <th >
		         METODA <br> ANALISIS  <br><i>(Method of <br>Analysis)</i>
		      </th>
		      <th> 
		          HASIL ANALISIS <br> 
		          <i>(Result of Anlysis)</i>
		      </th>
			</tr>
	<?php
			//ISI TABEL
			if($jenislap=="STERILITAS"){
	           	require_once(APPPATH.'views/cetakPdf/NonAktif/na_hasil_steril.php');
	        }
	        else if($jenislap=="PIROGENITAS"){
	           	require_once(APPPATH.'views/cetakPdf/NonAktif/na_hasil_pirogenitas.php');
	        }
	        else if(($jenislap=="MDP")OR($jenislap=="MIBI")OR($jenislap=="DTPA")OR($jenislap=="Ethambutol")OR($jenislap=="EDTMP")){

	           	require_once(APPPATH.'views/cetakPdf/NonAktif/na_hasil.php');
	        }
	        else{

	        }
		//require_once(APPPATH.'views/cetakPdf/NonAktif/na_hasil.php');


	    //CONFIGURASI FOOTER
	    require_once(APPPATH.'views/cetakPdf/NonAktif/cetakFooter.php');

	?>	
	</body>
</html>