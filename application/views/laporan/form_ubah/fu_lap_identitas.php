<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Ubah <br><small>Laporan Sertifikat<span class="text text-primary"> Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>

<?php echo validation_errors(); ?>
<?php echo form_open('laporan/ubahLaporan/' . $ffsu['id_lap']); ?>
<div class="card">
	<div class="card-header bg-primary text-white m-3 pt-3 rounded">
		<h5 class="">IDENTITAS SAMPEL UJI </h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<div class="form-group">
					<label>No. Laporan * </label>
					<input class='form-control' type="text" name="no_lap" value="<?php echo $ffsu['no_lap']; ?>">
				</div>
				<div class="form-group">
					<label>Pemilik Sampel Uji </label>
					<input class='form-control' type="text" name="pemilik" value="<?php echo $ffsu['pemilik']; ?>">
				</div>
				<div class="form-group">
					<label>Jenis Sampel Uji </label>
					<input class='form-control' type="text" name="jenis_smpl" value="<?php echo $ffsu['jenis_smpl']; ?>">
				</div>
				<div class="form-group">
					<label>Nama Radioisotop dan Bahan * </label>
					<select class='form-control' name="id_bahan">
						<option value="none"> Select </option>
						<option value="none"> ------ </option>
						<?php
						foreach ($ffsus as $f_s_b) {
							if ($ffsu['id_bahan'] == $f_s_b['id_bahan']) {
						?>
								<option name="op1" value="<?php echo $f_s_b['id_bahan']; ?>" selected>
									<?php echo $f_s_b['nm_bahan'] . " (" . $f_s_b['alias'] . ")"; ?></option>
							<?php
							} else {
							?>
								<option name="op1" value="<?php echo $f_s_b['id_bahan']; ?>">
									<?php echo $f_s_b['nm_bahan'] . " (" . $f_s_b['alias'] . ")"; ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Jumlah Sampel Uji </label>
					<input class='form-control' type="text" name="jumlah_smpl" value="<?php echo $ffsu['jumlah_smpl']; ?>">
				</div>
			</div>

			<div class="col-lg-1 col-sm-12"></div>

			<div class="col-lg-5 col-sm-12">
				<div class="form-group">
					<label>No. Batch Produk </label>
					<input class='form-control' type="text" name="no_batch" value="<?php echo $ffsu['no_batch']; ?>">
				</div>
				<div class="form-group">
					<label>No. Batch Kimia Farma</label>
					<input class='form-control' type="text" name="no_batch_kf" value="<?php echo $ffsu['no_batch_kf']; ?>">
				</div>
				<div class="row">
					<div class="col-lg-6 form-group">
						<label>Tanggal Pengambilan Sample * </label>
						<?php
						$tgl_pn1 = $ffsu['tgl_pn'];
						$tgl_pn = date('Y-m-d\TH:i', strtotime($tgl_pn1));
						?>
						<input class='form-control' type="datetime-local" name="tgl_pn" value="<?php echo $tgl_pn; ?>">
					</div>
					<div class="col-lg-6 form-group">
						<label>Tanggal Analisis * </label>
						<?php
						$tgl_an1 = $ffsu['tgl_an'];
						$tgl_an = date('Y-m-d\TH:i', strtotime($tgl_an1));
						?>
						<input class='form-control' type="datetime-local" name="tgl_an" value="<?php echo $tgl_an; ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Kondisi Lingkungan </label>
					<input class='form-control' type="text" name="k_ling" value="<?php echo $ffsu['k_ling']; ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="spacer30"></div>
<?php
$this->load->view('laporan/form_ubah/fu_lap_hasil');
?>