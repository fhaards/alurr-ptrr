<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Ubah <br><small>Radioisotop/Bahan
							<span class="text text-primary">Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>

		<hr>

		<?php echo validation_errors(); ?>
		<?php echo form_open('produk/ubahProduk/' . $f_f_u['id_bahan']); ?>
		<div class="spacer30"></div>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Produk/Radioisotop</label>
					<input type="text" class='form-control' value="<?php echo $f_f_u['alias']; ?>" name="alias">
				</div>
				<div class="form-group">
					<label>Nama Bahan Baku</label>
					<input type="text" class='form-control' value="<?php echo $f_f_u['nm_bahan']; ?>" name="nm_bhn">
				</div>
				<div class="row">
					<div class="col-lg-6">
						<label>Waktu</label>
						<input type="text" class='form-control' value="<?php echo $f_f_u['waktu']; ?>" name="waktu">
					</div>
					<div class="col-lg-6">
						<label>Satuan</label>
						<select class='form-control' name="satuan" required>
							<option value="<?php echo $f_f_u['satuan']; ?>"> <?php echo $f_f_u['satuan']; ?> </option>
							<option value=""> - </option>
							<option value="Menit"> Menit </option>
							<option value="Jam"> Jam </option>
							<option value="Hari"> Hari </option>
							<option value="Tahun"> Tahun </option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Derajat Keasaman</label>
					<input type="text" class='form-control' value="<?php echo $f_f_u['derajat_keasaman_bhn']; ?>" name="der_keas">
				</div>
				<div class="form-group">
					<label>Konsentrasi Radioaktif</label>
					<input type="text" class='form-control' value="<?php echo $f_f_u['konsentrasi_radioaktif_bhn']; ?>" name="k_rdk">
				</div>
				<div class="form-group">
					<label>Kemurnian Radionukida</label>
					<input class='form-control' type="text" value="<?php echo $f_f_u['kem_rdnu_bhn']; ?>" name="kem_rdnu_bhn">
				</div>
				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<input class='form-control' type="text" value="<?php echo $f_f_u['kem_rdkm_bhn']; ?>" name="kem_rdkm_bhn">
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>SOP</label>
					<input type="text" class='form-control' name="nosop_bhn" value="<?php echo $f_f_u['nosop_bhn']; ?>">
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col">
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-send"></i> Kirim
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>