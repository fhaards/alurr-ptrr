<div class="card">
  	<div class="card-header bg-info text-white p1 m-3 rounded">
  		<div class="row">
	  		<div class="col-lg-8 col-sm-8">
	    		<h5 class="pt-2">HASIL PENGUJIAN/ ANALISIS SAMPEL UJI</h5>
	    	</div>
		</div>
  	</div>

  	<div class="card-body">
  		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>Bentuk Fisik</label>
					<input type="text" class='form-control' name="bentuk_fisik" value="<?php echo $ffsu['bentuk_fisik_lp'];?>">
				</div>
				<div class="form-group">
					<label>Derajat Keasaman</label>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<input type="text" class='form-control' name="der_keas_na" value="<?php echo $ffsu['der_keas_na_lp'];?>">
						</div>
						<div class="col-lg-6 col-sm-12">
							<input type="text" class='form-control' name="ktdk_bntg_der" value="<?php echo $ffsu['ktdk_bntg_der'];?>">
						</div>
					</div>
					
				</div>
				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<input type="text" class='form-control' name="kem_rdkm_na" value="<?php echo $ffsu['kem_rdkm_na_lp'];?>">
						</div>
						<div class="col-lg-6 col-sm-12">
							<input type="text" class='form-control' name="ktdk_bntg_rdkm" value="<?php echo $ffsu['ktdk_bntg_rdkm'];?>">
						</div>
					</div>
					
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>Sterilitas</label>
					<input type="text" class='form-control' name="steril" value="<?php echo $ffsu['sterilitas_lp'];?>">
				</div>
				<div class="form-group">
					<label>Pirogenitas</label>
					<input type="text" class='form-control' name="pirogenitas" value="<?php echo $ffsu['pirogenitas_lp'];?>">
				</div>
			</div>

		</div>
		
		<div class="spacer30"></div>


		<div class="row">
			<div class="col">
			<div class="spacer30"></div><hr>
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-send"></i> Kirim
			</button>
			</div>
		</div>
  	</div>



</div>

<?php echo form_close();?>