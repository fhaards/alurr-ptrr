<div class="card card-homepage">
	<div class="card-body">
		<div class="page-header">
			<h1><small> Laporan Terakhir</small></h1>
		</div>
		<div class="spacer30"></div>
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#prdk-aktif">Laporan Aktif</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#prdk-nonaktif">Laporan Non-Aktif</a>
			</li>
		</ul>
		<div class="spacer10"></div>
		<div class="tab-content ">
			<!--------- TAB PILLS LAPORAN AKTIF -------->
			<div class="tab-pane active" id="prdk-aktif">
				<table class="table">
					<tr>
						<th>No Laporan</th>
						<th>Tanggal </th>
						<th></th>
					</tr>
					<?php
					$no = 0;
					foreach ($f_sertis as $f_serti) {
						$no++;
						$idlap    = $f_serti['id_lap'];
						$tglIn    = date('d/M/Y H:m', strtotime($f_serti['tgl_in']));
					?>
						<tr>
							<td>
								<b><?php echo $f_serti['no_lap']; ?></b>
							</td>
							<td>
								
								<div class="text-muted"><?php echo $tglIn; ?> | <?php echo myDateInterval($f_serti['tgl_in']); ?></div>
							</td>
							<td>
								<a class="btn btn-primary text-white" href="<?php echo site_url('laporan/detail-laporan/' . $idlap); ?>">
									<span class="fa fa-eye"></span> Detail
								</a>
							</td>
						</tr>
					
					<?php
						}
					?>
				</table>
			</div>

			<!--------- TAB PILLS LAPORAN NONAKTIF -------->
			<div class="tab-pane fade nopadding nomargin" id="prdk-nonaktif">
				<table class="table">
					<tr>
						<th>No Laporan</th>
						<th>Tanggal </th>
						<th></th>
					</tr>
					<?php
						$no = 0;
						foreach ($f_sertis2 as $fna) {
						$idlap = $fna['id_lap_na'];
						$tgl_in_na = date('d/M/Y H:i', strtotime($fna['tgl_in_na']));
					?>
					<tr>
						<td>
							<b><?php echo $fna['no_lap_na']; ?></b>
						</td>
						<td>
							
							<div class="text-muted"><?php echo $tgl_in_na; ?> | <?php echo myDateInterval($fna['tgl_in_na']); ?></div>
						</td>
						<td>
							<a class="btn btn-primary text-white"  href="<?php echo site_url('laporan/detail-laporan-na/' . $idlap); ?>">
								<span class="fa fa-eye"></span> Detail
							</a>
						</td>
					</tr>
					
					<?php
						}
					?>
				</table>
			</div>
		</div>

	</div>
	<div class="card-footer">
		<a href="<?php echo site_url('laporan'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-file"></i> &nbsp; Lihat Semua Tabel </a>
	</div>
</div>