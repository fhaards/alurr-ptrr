<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1>
						Form Ubah <br><small>Laporan Sertifikat
							<span class="text text-primary">Non-aktif</span></small>
					</h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>
<?php echo validation_errors(); ?>
<?php echo form_open('laporan/ubahLaporanNa/' . $ffsu['id_lap_na']); ?>
<div class="card">
	<div class="card-header bg-primary text-white pt-3 m-3 rounded">
		<h5>IDENTITAS SAMPEL UJI </h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>No. Laporan * </label>
					<input class='form-control' type="text" name="no_lap_na" value="<?php echo $ffsu['no_lap_na']; ?>" list="no_lap_na" required>
				</div>
				<div class="form-group">
					<label>Jenis Laporan</label>
					<select name="jenisLap" class="form-control" required>
						<?php
						$jenis = $ffsu['jenis_na_lp'];
						$cekJenis = array('1' => 'DTPA', '2' => 'EDTMP', '3' => 'Ethambutol', '4' => 'MIBI', '5' => 'MDP', '6' => 'STERILITAS', '7' => 'PIROGENITAS');
						foreach ($cekJenis as $key => $eachVal) {
							if ($eachVal == $jenis) {
								echo "<option value='$eachVal' selected>" . $eachVal . "</option>";
							} else {
								echo "<option value='$eachVal'>" . $eachVal . "</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Radioisotop dan Bahan * </label>
					<select class='form-control' name="id_bahan_na">
						<?php
						foreach ($ffsus as $f_s_b) {
							if ($ffsu['id_bahan_na'] == $f_s_b['id_bahan_na']) {
						?>
								<option name="op1" value="<?php echo $f_s_b['id_bahan_na']; ?>" selected>
									<?php echo $f_s_b['nm_bahan_na']; ?></option>
							<?php
							} else {
							?>
								<option name="op1" value="<?php echo $f_s_b['id_bahan_na']; ?>">
									<?php echo $f_s_b['nm_bahan_na']; ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Pemilik Sampel Uji </label>
					<input class='form-control' type="text" name="pemilik_na" list="pemilik_na" value="<?php echo $ffsu['pemilik_na']; ?>">
				</div>
				<div class="form-group">
					<label>Jumlah Sampel Uji </label>
					<input class='form-control' type="text" name="jumlah_smpl_na" list="jumlah_smpl_na" value="<?php echo $ffsu['jumlah_smpl_na']; ?>">
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>No. Batch Produk </label>
					<input class='form-control' type="text" name="no_batch_na" list="no_batch_na" value="<?php echo $ffsu['no_batch_na']; ?>">
				</div>
				<div class="form-group">
					<label>No. Batch Produk KF </label>
					<input class='form-control' type="text" name="no_batchkf_na" list="no_batchkf_na" value="<?php echo $ffsu['no_batchkf_na']; ?>">
				</div>
				<div class="row">
					<div class="col-lg-6 form-group">
						<label>Tanggal Pengambilan Sample * </label>
						<?php
						$tgl_pn1_na = $ffsu['tgl_pn_na'];
						$tgl_pn_na = date('Y-m-d\TH:i', strtotime($tgl_pn1_na));
						?>
						<input class='form-control' type="datetime-local" name="tgl_pn_na" value="<?php echo $tgl_pn_na; ?>">
					</div>
					<div class="col-lg-6 form-group">
						<label>Tanggal Analisis * </label>
						<?php
						$tgl_an1_na = $ffsu['tgl_an_na'];
						$tgl_an_na = date('Y-m-d\TH:i', strtotime($tgl_an1_na));
						?>
						<input class='form-control' type="datetime-local" name="tgl_an_na" value="<?php echo $tgl_an_na; ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Kondisi Lingkungan </label>
					<input class='form-control' type="text" name="k_ling_na" list="k_ling_na" value="<?php echo $ffsu['k_ling_na']; ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="spacer30"></div>

<?php
$this->load->view('laporan/form_ubah/nafu_lap_hasil');
?>