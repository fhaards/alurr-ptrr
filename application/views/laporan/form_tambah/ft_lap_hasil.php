<div class="card">
  	<div class="card-body bg-info text-white m-3 rounded">
  		<div class="row">
	  		<div class="col-lg-8 col-sm-8">
	    		<h5 class="pt-2">HASIL PENGUJIAN/ ANALISIS SAMPEL UJI</h5>
	    	</div>
	    	<div class="col-lg-4 col-sm-4">
				<select id="satuanID" class="form-control">
					<option> Pilih Konversi </option>
					<option value="mCi" selected> mCi </option>
					<option value="TBq"> TBq </option>
					<option value="GBq"> GBq </option>
					<option value="MBq"> MBq </option>
					<option value="KBq"> KBq </option>
					<option value="Bq"> Bq </option>
				</select>
			</div>
		</div>
	  </div>
</div>
<div class="card">
  	<div class="card-body">
	    <div class="alert alert-custom" role="alert">
	      <span class="text-muted">1. * wajib di isi</span>
	      <br>
	      <span class="text-muted">2. Background abu-abu adalah hasil konversi</span>
	    </div>
  		<div class="spacer30"></div>
		<div class="row">

  			<div class="col-lg-6 col-sm-12">
  				<div class="form-group">
					<label>Aktivitas Saat Pengujian </label>
					<div class="row nopadding">
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" name="akt_awal" class="form-control" id="aktAwl" list="akt_awal">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="">mCi/ml</span>
							  	</div>
							</div>
							
						</div>
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" class="form-control DsRd" id="aktAwlConv" disabled>
							  	<div class="input-group-prepend">
							    	<span class="input-group-text"><a id="satuanPick">mCi</a>/ml</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
				
  				<div class="form-group">
					<label>Aktivitas Saat Kalibrasi </label>
					<div class="row nopadding">
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" class="form-control" name="akt_kal" id="aktKal" readonly>
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="">mCi/ml</span>
							  	</div>
							</div>
						</div>
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" class="form-control DsRd" id="aktKalConv" disabled>  
							  	<div class="input-group-prepend">
							    	<span class="input-group-text"><a id="satuanPick2">mCi</a>/ml</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
								
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Tanggal Pengujian * </label>
							<input class='form-control' type="datetime-local" name="tgl_peng" required>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Tanggal Kalibrasi * </label>
							<input class='form-control' type="datetime-local" name="tgl_akt_kal" required>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label> Kons Radioaktivitas * </label>
					<div class="row nopadding">
						<div class="col">
							<div class="input-group mb-3">
							  	<input required class='form-control' type="text" name="k_rdk" id="kons" list="k_rdk">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="">mCi/ml</span>
							  	</div>
							</div>
						</div>
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" class="form-control DsRd" id="konsConv" disabled>  
							  	<div class="input-group-prepend">
							    	<span class="input-group-text"><a id="satuanPick3">mCi</a>/ml</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group ">
					<label>Volume * </label>
					<div class="row ">
						<div class="col-lg-6">
							<div class="input-group mb-3">
							  	<input required class='form-control' type="text" name="volume" id="volume">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text">ml</span>
							  	</div>
							</div>

						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_akt" 
							placeholder="Ketidakpastian Pengukuran" list="ktdk_akt">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label> Total Radioaktivitas atau Aktivitas Dikirim (Kons * Volume)</label>
					<div class="row">
						<div class="col">
							<div class="input-group mb-3">
							  	<input id="totalKV" class='form-control'  name="t_akt" type="text" readonly>
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="">mCi/ml</span>
							  	</div>
							</div>
						</div>
						<div class="col">
							<div class="input-group mb-3">
							  	<input type="text" class="form-control DsRd" id="totalConv" disabled> 
							  	<div class="input-group-prepend">
							    	<span class="input-group-text"><a id="satuanPick4">mCi</a>/ml</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--- ////////////////////////////// SEPARATOR -->
			<div class="col-lg-12 col-sm-12">
				<hr><div class="spacer30"></div>
			</div>

			<div class="col-lg-6 col-sm-12">

				<div class="form-group">
					<label>Kejernihan</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="kejernihan" list="kejernihan">
						</div>
						<div class="col-lg-6"></div>
					</div>
				</div>

				<div class="form-group">
					<label>Derajat Keasaman (pH)</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="der_keas" list="der_keas">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_der" 
							placeholder="Ketidakpastian Pengukuran" list="ktdk_der">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Kemurnian Radionukida</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="kem_rdnu" list="kem_rdnu">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_k_rdnu" 
							placeholder="Ketidakpastian Pengukuran" list="ktdk_k_rdnu">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="kem_rdkm" list="kem_rdkm">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_k_rdkm" 
							placeholder="Ketidakpastian Pengukuran" list="ktdk_k_rdkm">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Fraksi</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="fraksi" list="fraksi">
						</div>
						<div class="col-lg-6"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>Pengguna/Pelanggan</label>
					<div class="row">
						<div class="col">
							<input class='form-control' type="text" name="pengguna" list="pengguna">
						</div>
						<div class="col"></div>
					</div>
				</div>
				<div class="form-group">
					<label>Range Waktu Peluruhan</label>
					<div class="row">
						<div class="col">
								<div class="input-group mb-3">
							  	<input class='form-control' type="text" name="r_w_pel">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="">Jam</span>
							  	</div>
							</div>
						</div>
						<div class="col"></div>
					</div>
				</div>

			</div>
		</div>

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