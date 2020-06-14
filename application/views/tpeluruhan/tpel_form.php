<div class="card">
	<div class="card-body m-3">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1>Lihat Tabel Peluruhan <br>
						<small>No. Lap : <br> <?php echo $ffsu['no_lap']; ?></small>
					</h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>

		</div>
	</div>
</div>


<div class="card">
	<div class="card-body m-3">
		<?php echo validation_errors(); ?>
		<?php echo form_open('peluruhan/form/' . $ffsu['id_lap'], array('class' => 'form-group')); ?>

		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="form-group">
					<div class="label">Total data</div>
					<input type="number" name="jmlData" placeholder="Masukan Jumlah Data" class="form-control">
				</div>

				<div class="form-group">
					<div class="label">Satuan yang digunakan</div>
					<select name="satuanPr" class="form-control">
						<option value="P_mCi"> mCi/ml </option>
						<option value="P_mBq"> MBq/ml </option>
						<option value="P_GBq"> GBq/ml </option>
					</select>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row nomargin">
			<button type="submit" class="btn btn-primary nomargin" name="sPrintLap">
				<i class="fa fa-eye"></i> Preview
			</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>