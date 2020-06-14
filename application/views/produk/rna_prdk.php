		<div class="spacer30"></div>
		<table id="tableData2" class="table table-responsive-sm" width='100%'>
			<thead>
				<tr>
					<th><span class="pt-2">Produk/<br>Radioisotop</span></th>		
					<th> Bentuk Fisik </th>
					<th> Derajat<br>Keasaman </th>
					<th> Kemurnian<br>Radiokimia</th>
					<th> Sterilitas</th>
					<th> Pirogenitas</th>
					<th> Status </th>
					<th>  </th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach($f_bhn_na as $fna){
					$jproduk=$fna['jenis_produk'];
					$bntkfisik=$fna['bentuk_fisik'];
					$idbahan_na=$fna['id_bahan_na'];
					$status_na=$fna['status_na'];
					$id=$idbahan_na;
			?>
				<tr id="<?php echo $id; ?>">
					<td><?php echo $fna['nm_bahan_na'];?></td>
					<td><?php echo $bntkfisik; ?></td>
					<td><?php echo $fna['der_keas_na'];?></td>
					<td><?php echo $fna['kem_rdkm_na'];?></td>
					<td><?php echo $fna['sterilitas'];?></td>
					<td><?php echo $fna['pirogenitas'];?></td>
					<td class="text-center" width="20px">
						<?php 
						if($status_na=='1'){
						?>
							<a onclick="gantiStatus('<?php echo site_url('produk/ubahStatusNa/'.$idbahan_na) ?>')" data-toggle="tooltip" data-replacement="top" title="Ganti menjadi disabled" href="#!" class="badge badge-info"><i class='fa fa-check-circle'></i> Enabled </a>
						<?php
						}
						else if($status_na=='2'){
						?>
							<a onclick="gantiStatus('<?php echo site_url('produk/ubahStatusNa/'.$idbahan_na) ?>')"
							data-toggle="tooltip" data-replacement="top" title="Ganti menjadi enabled"	
						   	href="#!" class="badge badge-danger"><i class='fa fa-times-circle'></i> Disabled</a>
						<?php
						}
						?>
					</td>
					<td class="text-center">
						<!--<button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i></button>-->
						<a class="btn btn-primary btn-sm" href="<?php echo site_url('produk/ubah-produk-na/'.$idbahan_na.'/'.$jproduk);?>"
							data-toggle="tooltip" data-replacement="top" title="Ubah Data"> 
						   <i class="fa fa-edit"></i>
						</a>
						<?php if(isAdmin()) : ?>
							<a onclick="deleteConfirm('<?php echo site_url('produk/hapusProdukNa/'.$idbahan_na) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						<?php endif; ?>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>