<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Tambah <br><small>Radioisotop/Bahan
							<span class="text text-primary">Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>

		<?php echo validation_errors(); ?>
		<?php echo form_open('produk/tambahProduk', array('class' => 'form-group')); ?>
		<div class="spacer30"></div>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Produk/Radioisotop</label>
					<input type="text" class='form-control' name="alias" required>
				</div>
				<div class="form-group">
					<label>Nama Bahan Baku</label>
					<input type="text" class='form-control' name="nm_bhn" required>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<label>Waktu</label>
						<input type="text" class='form-control' value="0" name="waktu" required>
					</div>
					<div class="col-lg-6">
						<label>Satuan</label>
						<select class='form-control' name="satuan">
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
					<input type="text" class='form-control' name="der_keas">
				</div>
				<div class="form-group">
					<label>Konsentrasi Radioaktif</label>
					<input type="text" class='form-control' name="k_rdk">
				</div>
				<div class="form-group">
					<label>Kemurnian Radionukida</label>
					<input class='form-control' type="text" name="kem_rdnu_bhn">
				</div>
				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<input class='form-control' type="text" name="kem_rdkm_bhn">
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>SOP</label>
					<input type="text" class='form-control' name="nosop_bhn" value="(SOP 000.000.000/IR 00 00/TRR 0)">
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