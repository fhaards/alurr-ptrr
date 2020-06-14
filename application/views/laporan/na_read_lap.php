<div class="spacer30"></div>

<table id="tableData2" class="table table-responsive-sm nowrap" width='100%'>
	<thead>
	<tr>
		<th> No. Laporan </th>
		<th> Jenis Laporan </th>
		<th> Jenis Sample </th>
		<th> Pemilik </th>
		<th> No. Batch </th>
		<th> Tgl. Input </th>
		<th> </th>
	</tr>
	</thead>
	<tbody>
	<?php 
		foreach($f_sertisna as $fna){
		$idlap=$fna['id_lap_na'];
		$nolap=$fna['no_lap_na'];
		$jenislap=$fna['jenis_na_lp'];
		$tgl_in_na=date('Y/m/d', strtotime($fna['tgl_in_na']));
	?>
		<tr>
			<td><?php echo $nolap;?></td>
			<td><?php echo $jenislap;?></td>
			<td><?php echo $fna['nm_bahan_na'];?></td>
			<td><?php echo $fna['pemilik_na'];?></td>
			<td><?php echo $fna['no_batch_na'];?></td>
			<td><?php echo $tgl_in_na;?></td>
			<td class="text-center">
				<div class="aksi-lg">
					<div class="btn-group dropleft">
						<button class="btn btn-primary dropdown-toggle btn-sm" 
						type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-list-ul"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="<?php echo site_url('laporan/ubah-laporan-na/'.$idlap);?>">
						    	<i class="fa fa-edit"></i> Ubah</a>
						    <a class="dropdown-item" href="<?php echo site_url('laporan/detail-laporan-na/'.$idlap);?>">
						    	<i class="fa fa-eye"></i> Detail</a>
						    <a class="dropdown-item" href="<?php echo site_url('cetakpdf/cetaknonaktif/'.$idlap.'/'.$jenislap.'/'.$nolap);?>" target="_blank">
						    	<i class="fa fa-print"></i> Cetak</a>
						    <div class="dropdown-divider"></div>

					    	<a onclick="deleteConfirm('<?php echo site_url('laporan/hapusLaporanNa/'.$idlap) ?>')"
							   href="#!" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Hapus</a>
						</div>
					</div>
				</div>
			</td>
		</tr>
	<?php 
		}
	?>
	</tbody>
</table>
