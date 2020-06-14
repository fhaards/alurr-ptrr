<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Tambah <br><small>Laporan Sertifikat<span class="text text-primary"> Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>


<?php echo validation_errors(); ?>
<?php echo form_open('laporan/tambahLaporan', array('class' => 'form-group')); ?>
<div class="card">
	<div class="card-body bg-primary text-white m-3 rounded">
		<h5>IDENTITAS SAMPEL UJI </h5>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<div class="form-group">
					<label>No. Laporan * </label>
					<input class='form-control' type="text" name="no_lap" list="no_lap" id="nolap">
					<span id="username_result"></span>
				</div>
				<div class="form-group">
					<label>Pemilik Sampel Uji </label>
					<input class='form-control' type="text" name="pemilik" list="pemilik">
				</div>
				<div class="form-group">
					<label>Jenis Sampel Uji </label>
					<input class='form-control' type="text" name="jenis_smpl" list="jenis_smpl">
				</div>
				<div class="form-group">
					<label>Nama Radioisotop dan Bahan * </label>
					<select class='form-control' name="id_bahan">
						<?php
						foreach ($cekStatusProduk as $f_s_b) {
						?>
							<option name="op1" value="<?php echo $f_s_b['id_bahan']; ?>">
								<?php echo $f_s_b['nm_bahan']; ?>
							</option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Jumlah Sampel Uji </label>
					<input class='form-control' type="text" name="jumlah_smpl" list="jumlah_smpl">
				</div>
			</div>

			<div class="col-lg-1 col-sm-12"></div>

			<div class="col-lg-5 col-sm-12">
				<div class="form-group">
					<label>No. Batch Produk </label>
					<input class='form-control' type="text" name="no_batch" list="no_batch">
				</div>
				<div class="form-group">
					<label>No. Batch Kimia Farma</label>
					<input class='form-control' type="text" name="no_batch_kf" list="no_batchkf">
				</div>
				<div class="row">
					<div class="col-lg-6 form-group">
						<label>Tanggal Pengambilan Sample * </label>
						<input class='form-control' type="datetime-local" name="tgl_pn">
					</div>
					<div class="col-lg-6 form-group">
						<label>Tanggal Analisis * </label>
						<input class='form-control' type="datetime-local" name="tgl_an">
					</div>
				</div>
				<div class="form-group">
					<label>Kondisi Lingkungan </label>
					<input class='form-control' type="text" name="k_ling" list="k_ling">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('laporan/form_tambah/ft_datalist');
$this->load->view('laporan/form_tambah/ft_lap_hasil');
?>