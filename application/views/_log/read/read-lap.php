<div class="spacer30"></div>
<table id="tableData" class="table table-striped table-responsive-sm" width='100%'>
	<thead>
		<tr>
			<th> No. Laporan </th>
			<th> Input </th>
			<th> Tanggal Input </th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$no=0;
		foreach($logLap as $logLaps){
			$idLap=$logLaps['log_id_lap'];
			$tgl=date('d / M / Y - H:i', strtotime($logLaps['log_date']));
		?>
		<tr>
			<td>
				<b><?php echo $logLaps['log_item'];?></b>
			</td>
			<td>
				Di Input oleh : <b> <?php echo $logLaps['log_user'];?> </b>
			</td>
			<td>
				<?php echo $tgl; ?>
			</td>
			<td width="10">
				<label class="badge badge-pill badge-primary">
					<a href="<?php echo site_url('log-activity/detail-lap/'.$idLap);?>" class="text-white">
					<span class="fa fa-eye"></span> Detail
					</a>
				</label>	
			</td>

		</tr>
		<?php
		}
		?>
	</tbody>
</table>