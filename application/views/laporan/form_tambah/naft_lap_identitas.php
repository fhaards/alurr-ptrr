<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1>Form Tambah <br><small>Laporan Sertifikat <span class="text text-primary">Non-aktif</span></small>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>

<div class="spacer30"></div>
<?php echo validation_errors(); ?>
<?php echo form_open('laporan/tambahLaporanNa'); ?>
<div class="card">
	<div class="card-header bg-primary text-white m-3 rounded">
		<h5>IDENTITAS SAMPEL UJI </h5>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>No. Laporan * </label>
					<input class='form-control' type="text" name="no_lap_na" list="no_lap_na" id="nolap2" required>
					<span id="username_result"></span>
				</div>
				<div class="form-group">
					<label>Jenis Laporan</label>
					<select name="jenisLap" class="form-control" required>
						<option value="DTPA">DTPA</option>
						<option value="EDTMP">EDTMP</option>
						<option value="Ethambutol">Ethambutol</option>
						<option value="MDP">MDP</option>
						<option value="MIBI">MIBI</option>
						<option value="STERILITAS">STERILITAS</option>
						<option value="PIROGENITAS">PIROGENITAS</option>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Radioisotop dan Bahan * </label>
					<select class='form-control' name="id_bahan_na">
						<?php
						foreach ($cekStatusProduk as $f_s_b) {
						?>
							<option name="op1" value="<?php echo $f_s_b['id_bahan_na']; ?>">
								<?php echo $f_s_b['nm_bahan_na']; ?>
							</option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Pemilik Sampel Uji </label>
					<input class='form-control' type="text" name="pemilik_na" list="pemilik_na">
				</div>
				<div class="form-group">
					<label>Jumlah Sampel Uji </label>
					<input class='form-control' type="text" name="jumlah_smpl_na" list="jumlah_smpl_na">
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>No. Batch Produk </label>
					<input class='form-control' type="text" name="no_batch_na" list="no_batch_na">
				</div>
				<div class="form-group">
					<label>No. Batch Produk KF </label>
					<input class='form-control' type="text" name="no_batchkf_na" list="no_batchkf_na">
				</div>
				<div class="row">
					<div class="col-lg-6 form-group">
						<label>Tanggal Pengambilan Sample * </label>
						<input class='form-control' type="datetime-local" name="tgl_pn_na" required>
					</div>
					<div class="col-lg-6 form-group">
						<label>Tanggal Analisis * </label>
						<input class='form-control' type="datetime-local" name="tgl_an_na" required>
					</div>
				</div>
				<div class="form-group">
					<label>Kondisi Lingkungan </label>
					<input class='form-control' type="text" name="k_ling_na" list="k_ling_na">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="spacer30"></div>

<?php

$this->load->view('laporan/form_tambah/ft_datalist');
$this->load->view('laporan/form_tambah/naft_lap_hasil');
?>