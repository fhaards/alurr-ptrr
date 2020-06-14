<div class="spacer30"></div>

<table id="tableData" class="table table-responsive-sm nowrap" width='100%'>
	<thead>
	<tr>
		<th> No. Laporan </th>
		<th> Pemilik </th>
		<th> Pengguna </th>
		<th> Jenis Sample </th>
		<th> No. Batch </th>
		<th> Tgl. Input </th>
		<th> </th>
	</tr>
	</thead>
	<tbody>
	<?php 
	$no=0;
	foreach($f_sertis as $f_serti){
		$idlap=$f_serti['id_lap'];
		$tgl_in=date('Y/m/d', strtotime($f_serti['tgl_in']));
		$pmlk=$f_serti['pemilik'];
		$penggn=$f_serti['pengguna'];
		$jsmpl=$f_serti['jenis_smpl'];
		//$j_smpl=substr($jsmpl,0,20)."  ....";
		//$pemilik=substr($pmlk,0,8)."  ....";
		//$pengguna=substr($penggn,0,8)."  ....";
	?>
	<tr>
		<td><?php echo $f_serti['no_lap'];?></td>
		<td><?php echo $pmlk; ?></td>
		<td><?php echo $penggn;?></td>
		<td><?php echo $jsmpl; ?></td>
		<td><?php echo $f_serti['no_batch'];?></td>
		<td><?php echo $tgl_in;?></td>
		<td class="text-center">
			<div class="aksi-lg">
				<div class="btn-group dropleft">
					<button class="btn btn-primary dropdown-toggle btn-sm" 
					type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <i class="fa fa-list-ul"></i>
					</button>
					<div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="<?php echo site_url('laporan/ubah-laporan/'.$idlap);?>">
					    	<i class="fa fa-edit"></i> Ubah</a>
					    <a class="dropdown-item" href="<?php echo site_url('laporan/detail-laporan/'.$idlap);?>">
					    	<i class="fa fa-eye"></i> Detail</a>
					    <a class="dropdown-item" href="<?php echo site_url('cetak/pilih-cetak/'.$idlap);?>" target="_blank">
					    	<i class="fa fa-print"></i> Cetak</a>
					    <div class="dropdown-divider"></div>

					    <a onclick="deleteConfirm('<?php echo site_url('laporan/hapusLaporan/'.$idlap) ?>')"
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