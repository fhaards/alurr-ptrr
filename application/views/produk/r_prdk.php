
		<div class="spacer30"></div>
		<table id="tableData" class="table table-responsive-sm" width='100%'>
			<thead>
				<tr>
					<th class="t-sm"> Produk/<br>Radioisotop </th>
					<th> Nama Bahan /<br> Bahan Baku</th>
					<th> Waktu </th>
					<th> Satuan </th>
					<th> Derajat <br> Keasaman </th>
					<th> Konsentrasi <br> Radioaktif </th>
					<th> Kemurnian <br> Radionuklida  </th>
					<th> Kemurnian <br> Radiokimia </th>
					<th> Status </th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$no=0;
				foreach($f_bhns as $f_bhn){
					//$no++;
					$id=$f_bhn['id_bahan'];
					$status=$f_bhn['status'];
				?>
				<tr>
					<td class="t-sm"><?php echo $f_bhn['alias'];?></td>
					<td><?php echo $f_bhn['nm_bahan'];?></td>
					<td><?php echo $f_bhn['waktu'];?></td>
					<td><?php echo $f_bhn['satuan'];?></td>
					<td><?php echo $f_bhn['derajat_keasaman_bhn'];?></td>
					<td><?php echo $f_bhn['konsentrasi_radioaktif_bhn'];?></td>
					<td><?php echo $f_bhn['kem_rdnu_bhn'];?></td>
					<td><?php echo $f_bhn['kem_rdkm_bhn'];?></td>
					<td class="text-center" width="20px">
						<?php 
						if($status=='1'){
						?>
							<a onclick="gantiStatus('<?php echo site_url('produk/ubahStatus/'.$id) ?>')"
							data-toggle="tooltip" data-replacement="top" title="Ganti menjadi disabled"	
						   	href="#!" class="badge badge-info"><i class='fa fa-check-circle'></i> Enabled</a>
						<?php
						}
						else if($status=='2'){
						?>
							<a onclick="gantiStatus('<?php echo site_url('produk/ubahStatus/'.$id) ?>')"
							data-toggle="tooltip" data-replacement="top" title="Ganti menjadi enabled"	
						   	href="#!" class="badge badge-danger"><i class='fa fa-times-circle'></i> Disabled</a>
						<?php
						}
						?>
					</td>
					<td class="text-center">
						<a class="btn btn-primary btn-sm" href="<?php echo site_url('produk/ubah-produk/'.$id);?>"
							data-toggle="tooltip" data-replacement="top" title="Ubah Data"> 
						   <i class="fa fa-edit"></i>
						</a>
						<?php if(isAdmin()) : ?>
							<a onclick="deleteConfirm('<?php echo site_url('produk/hapusProduk/'.$id) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						<?php endif; ?>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>