<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
				<h1> Tabel Peluruhan <br> <small>List Tabel Peluruhan </small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<table id="tableData" class="table table-responsive-sm  nowrap" width='100%'>
			<thead>
			<tr>
				<th> No. Laporan </th>
				<th> Pemilik </th>
				<th> Pengguna </th>
				<th> Jenis Sample </th>
				<th> No. Batch </th>
				<th> </th>
			</tr>
			</thead>
			<tbody>
		<?php 
			$no=0;
			foreach($f_sertis as $f_serti){
				$idlap=$f_serti['id_lap'];
				$pemilik=$f_serti['pemilik'];
				$pengguna=$f_serti['pengguna'];
				$j_smpl=$f_serti['jenis_smpl'];
			?>
			<tr>
				<td><?php echo $f_serti['no_lap'];?></td>
				<td><?php echo $pemilik; ?></td>
				<td><?php echo $pengguna;?></td>
				<td><?php echo $j_smpl; ?></td>
				<td><?php echo $f_serti['no_batch'];?></td>
				<td class="text-center">
					<div class="">
						<a class="btn btn-primary btn-sm" href="<?php echo site_url('tabel-peluruhan/pilih-data/'.$idlap);?>"
						   data-toggle="tooltip" data-replacement="top" title="Lihat Tabel"> 
						   <i class="fa fa-book"></i>
						</a>
					</div>

				</td>
			</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
</div>

