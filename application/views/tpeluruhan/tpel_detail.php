<?php
require_once(APPPATH . 'views/tpeluruhan/tpel_config.php');
?>
<div class="card">
	<div class="card-body m-3">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1>
						Tabel Peluruhan <br>
						<small> Detail dari no.lap : <br><?php echo $nolap; ?></small>
					</h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>

<?php require_once(APPPATH . 'views/tpeluruhan/tpel_info.php'); ?>

<div class="card">
	<div class="card-body">
		<div class="spacer30"></div>
		<table class="table table-responsive-sm t-pel-akt" width="100%">
			<tr>
				<th>NO. </th>
				<th>TANGGAL / JAM </th>
				<th>KONS.RADIOAKTIVITAS <br><?php echo $S_Satuan; ?> /ml</th>
				<th>TOT. VOLUME <br> ml</th>
				<th>TOT. RADIOAKTIVITAS<br><?php echo $S_Satuan; ?> </th>
				<th>KETERANGAN </th>
			</tr>
			<?php
			foreach ($valArray as $key => $eachVal) {
				$newKon = number_format($eachVal, 2, ",", "");
				$newTrdk = number_format($eachVal * $volume, 2, ",", "");
				$repeat = strtotime("+" . $timespan . " hour", strtotime($LastDate));
				$LastDate = date('Y/m/d H.i', $repeat);
			?>

				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $LastDate; ?></td>
					<td><?php echo $newKon; ?></td>
					<td><?php echo $volume; ?></td>
					<td><?php echo $newTrdk; ?></td>
					<td></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>