<?= $breadcrumb; ?>
<div class="row">
	<div class="col-lg-12 col-sm-12">
		<div class="page-header">
			<h1>Cetak Sertifikat <br>
				<small>Tentukan format yang akan dicetak</small> 
			</h1>
		</div>
	</div>
</div>
<div class="spacer30"></div>
<div class="card">
	<div class="card-body">
		<?php echo validation_errors(); ?>
		<?php echo form_open('cetak/pilih-cetak/'.$Cpdf['id_lap']); ?>

			<div class="spacer30"></div>

			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="page-header">
						<h1>No. Laporan : <br>
							<small><?php echo $Cpdf['no_lap'];?></small> 
							<input type="hidden" value="<?php echo $Cpdf['no_lap'];?>" name="nolap">
						</h1>
					</div>
				
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-lg-6 col-sm-12">

							<div class="form-group">
								<div class="label">Jenis Sertifikat</div>
								<select name="jenisPr" class="form-control">
									<option value="P_Sb"> Senyawa Bertanda </option>
									<option value="P_Lb"> Larutan Bulk </option>
								</select>
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
							<i class="fa fa-print"></i> Cetak
						</button>
					</div>
				</div>
			</div>
		<?php echo form_close();?>
	</div>
</div>


