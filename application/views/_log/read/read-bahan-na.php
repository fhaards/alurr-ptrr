<div class="spacer30"></div>
<table id="tableData" class="table table-responsive-sm" width='100%'>
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
		foreach($logBhnNa as $logBhns){
			$idBahan=$logBhns['log_id_bahanNa'];
			$tgl=date('d / M / Y - H:i', strtotime($logBhns['log_date']));
		?>
		<tr>
			<td>
				<b><?php echo $logBhns['log_item'];?></b>
			</td>
			<td>
				Di Input oleh : <b> <?php echo $logBhns['log_user'];?> </b>
			</td>
			<td>
				<?php echo $tgl; ?>
			</td>
			<td width="10">
				<label class="badge badge-pill badge-primary">
				<a href="<?php echo site_url('log-activity/detail-bahan-na/'.$idBahan);?>" class="text-white">
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