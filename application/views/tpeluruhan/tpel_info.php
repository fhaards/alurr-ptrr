<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 col-sm-12"></div>
			<div class="col-lg-6 col-sm-12 text-right">
				<a href="<?php echo site_url('peluruhan/cetakPdf/' . $idlap . '/' . $jmlData . '/' . $satuanPr); ?>" target="_blank" class="btn btn-primary">
					<i class="fa fa-print"></i> Cetak Pdf
				</a>
			</div>
		</div>

	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="t-pel-produk">
			<div class="row">
				<div class="col-lg-3 col-sm-12 col-xs-12">
					<h5 class="m-5">
						Radioisotop : <br>
						<small>
							<?php echo $nproduk; ?>
						</small>
						<br><br>
						Waktu Paruh : <br>
						<small>
							<?php echo $waktu . "<br> " . $satuan; ?>
						</small>
					</h5>
				</div>
				<div class="right col-lg-9 col-xs-12 col-sm-9">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center p-3">
						<div class="right-top">
							<span class="text">DATA PRODUK</span>
						</div>
					</div>
					<div class="right-bottom nomargin nopadding">
						<div class="row">
							<div class="rb-left col-lg-6 p-4">
								<table class="tb-rb-left" width="100%">
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class='td_r'>Bentuk Produk</td>
										<td class=''>: <?php echo $jenis_smpl; ?></td>
									</tr>
									<tr>
										<td class='td_r'>Kons. Radioaktivitas</td>
										<td class=''>: <?php echo $k_rdk . " " . $S_Satuan; ?>/ml</td>
									</tr>
									<tr>
										<td class='td_r'>Volume</td>
										<td class=''>: <?php echo $volume; ?> ml</td>
									</tr>
									<tr>
										<td class='td_r'>Total Radioaktivitas</td>
										<td class=''>: <?php echo $t_akt . " " . $S_Satuan; ?></td>
									</tr>
									<tr>
										<td class='td_r'>Tanggal Kalibrasi</td>
										<td class=''>: <?php echo $tgl_kal_f; ?></td>
									</tr>
								</table>
							</div>
							<div class="rb-right col-lg-5 p-4">
								<table class="tb-rb-right" width="100%">
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class='td_r'>No. Batch</td>
										<td class=''>: <?php echo $no_batch; ?></td>
									</tr>
									<tr>
										<td class='td_r'>Fraksi</td>
										<td class=''>: <?php echo $fraksi; ?> </td>
									</tr>
									<tr>
										<td class='td_r'>Tgl. Produksi</td>
										<td class=''>: <?php echo $tgl_peng_f; ?></td>
									</tr>
									<tr>
										<td class='td_r'>Pengguna</td>
										<td class=''>: <?php echo $pengguna; ?></td>
									</tr>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>