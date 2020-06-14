<html>
	<head>
		<title>Cetak Tabel Peluruhan </title>
		<?php 
			//EXTERNAL CSS 
			require_once(APPPATH.'views/_partials/_css_pdf.php');
		?>
		<div id="table-Pel">
			<?php 
				require_once(APPPATH.'views/tpeluruhan/tpel_config.php');
				require_once(APPPATH.'views/tpeluruhan/tpel_infoCetak.php');
			?>

			<div class="spacer30"></div>
			<table border="1" class="t-pel-akt text-center" width="100%">
				<tr>
					<th>NO. </th>
					<th>TANGGAL / JAM </th>
					<th>KONS.RADIOAKTIVITAS <br><?php echo $S_Satuan;?> /ml</th>
					<th>TOT. VOLUME <br> ml </th>
					<th>TOT. RADIOAKTIVITAS<br><?php echo $S_Satuan;?> </th>
					<th>KETERANGAN </th>
				</tr>

			<?php
				foreach ($valArray as $key => $eachVal) {
					$newKon=number_format($eachVal,2,".","");
					$newTrdk=number_format($eachVal*$volume,2,".","");
					$repeat = strtotime("+".$timespan." hour",strtotime($LastDate));
				    $LastDate = date('Y/m/d H.i',$repeat);
			?>
			    <tr>
			    	<td><?php echo $key; ?></td>
			    	<td><?php echo $LastDate; ?></td>
			    	<td><?php echo $newKon;?></td>
			    	<td><?php echo $volume;?></td>
			    	<td><?php echo $newTrdk;?></td>
			    	<td></td>
			    </tr>

			<?php
				}
			?>	

			</table>

		</div>
	</body>
</html>	