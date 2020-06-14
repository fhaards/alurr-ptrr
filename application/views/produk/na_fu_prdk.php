<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Form Ubah <br><small>Radioisotop/Bahan
							<span class="text text-primary">Non-Aktif</span></small></h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
		
		<hr>
		<?php echo validation_errors(); ?>
		<?php echo form_open('produk/ubahProdukNa/' . $fna['id_bahan_na'] . '/' . $fna['jenis_produk']); ?>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" class='form-control' value="<?php echo $fna['nm_bahan_na']; ?>" name="nm_bahan_na">
				</div>
			</div>
		</div>
		<div class="spacer30"></div>

		<div class="row">

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Kit Kering setelah/sebelum ditambah larutan .. </label>
					<input type="text" class='form-control' value="<?php echo $fna['ditambahi']; ?>" name="tambahi">
				</div>
				<div class="form-group">
					<label>Bentuk Fisik</label>
					<input type="text" class='form-control' value="<?php echo $fna['bentuk_fisik']; ?>" name="bentuk_fisik">
				</div>
				<div class="form-group">
					<label>Derajat Keasaman</label>
					<input type="text" class='form-control' value="<?php echo $fna['der_keas_na']; ?>" name="der_keas_na">
				</div>
				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<input type="text" class='form-control' value="<?php echo $fna['kem_rdkm_na']; ?>" name="kem_rdkm_na">
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Sterilitas</label>
					<input type="text" class='form-control' value="<?php echo $fna['sterilitas']; ?>" name="steril">
				</div>
				<div class="form-group">
					<label>Pirogenitas</label>
					<input type="text" class='form-control' value="<?php echo $fna['pirogenitas']; ?>" name="pirogenitas">
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Pemerian</label>
					<input type="text" class='form-control' value="<?php echo $fna['pemerian']; ?>" name="pemerian">
				</div>
				<div class="form-group">
					<label>Endotoksin</label>
					<input type="text" class='form-control' value="<?php echo $fna['endotoksin']; ?>" name="endotoksin">
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