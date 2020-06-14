<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Detail Log : <br>
						<small><?php echo $dataDitambah['log_item']; ?></small>
					</h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
				<div class="spacer10"></div>
				<?= $getCekLog; ?>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header alert alert-info m-3">
		<span class="font-weight-bold"> Data Ditambahkan :
			<?php
			echo $dataDitambah['log_user']; ?>
		</span>
		<span class="font-weight-bold ml-5">
			| Tanggal :
			<?php
			$dateLog = $dataDitambah['log_date'];
			echo date('d/M/Y H:i ', strtotime($dateLog));
			?>
		</span>
	</div>
	<div class="card-body mt-0">
		<div class="card-title">
			<span class="font-weight-bold"> Data Diubah : </span>
			<hr>
		</div>
		<div class="spacer30"></div>
		<table  id="tableData" class="table table-responsive-sm " width='100%'>
			<thead>
				<tr>
					<th> Nama Produk </th>
					<th> Aksi </th>
					<th> User </th>
					<th> Tanggal </th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 0;
				foreach ($dataDiubah as $eachLog) {
					$tgl = date('d / M / Y - H:i', strtotime($eachLog['log_date']));
				?>
					<tr>
						<td><?php echo $eachLog['log_item']; ?></td>
						<td><?php echo $eachLog['log_aksi']; ?></td>
						<td><?php echo $eachLog['log_user']; ?></td>
						<td><?php echo $tgl; ?></td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>