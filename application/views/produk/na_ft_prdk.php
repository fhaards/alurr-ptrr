<div class="card">
	<div class="card-body">
		
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Tambah <br><small>Radioisotop/Bahan
							<span class="text text-primary">Non-Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>

		<hr>

		<?php echo validation_errors(); ?>
		<?php echo form_open('produk/tambahProdukNa', array('class' => 'form-group')); ?>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="font-weight-bold"> <br></div>
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" class='form-control' name="nm_bahan_na">
				</div>
				<div class="form-group">
					<label>Kit Kering setelah/sebelum ditambah larutan .. </label>
					<input type="text" class='form-control' name="tambahi">
				</div>
			</div>
		</div>
		<div class="spacer30"></div>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Bentuk Fisik</label>
					<input type="text" class='form-control' name="bentuk_fisik">
				</div>
				<div class="form-group">
					<label>Derajat Keasaman</label>
					<input type="text" class='form-control' name="der_keas_na">
				</div>
				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<input type="text" class='form-control' name="kem_rdkm_na">
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Sterilitas</label>
					<input type="text" class='form-control' name="steril">
				</div>
				<div class="form-group">
					<label>Pirogenitas</label>
					<input type="text" class='form-control' name="pirogenitas">
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Endotoksin</label>
					<input type="text" class='form-control' name="endotoksin">
				</div>
				<div class="form-group">
					<label>Pemerian</label>
					<input type="text" class='form-control' name="pemerian">
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