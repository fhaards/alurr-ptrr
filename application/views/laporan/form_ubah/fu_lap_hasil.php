<div class="card">
  	<div class="card-header bg-info text-white pt-3 m-3 rounded">
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
							  	<input type="text" name="akt_awal" class="form-control" value="<?php echo $ffsu['akt_awal'];?>" id="aktAwl">
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
							  	<input type="text" name="akt_kal" class="form-control"   value="<?php echo $ffsu['akt_kal'];?>" id="aktKal" readonly>
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
							<?php 
								$tgl_peng1=$ffsu['tgl_peng'];
								$tgl_peng=date('Y-m-d\TH:i', strtotime($tgl_peng1));
							?>
							<input class='form-control' type="datetime-local" name="tgl_peng" value="<?php echo $tgl_peng;?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Tanggal Kalibrasi * </label>
							<?php 
								$tgl_kal1=$ffsu['tgl_akt_kal'];
								$tgl_kal=date('Y-m-d\TH:i', strtotime($tgl_kal1));
							?>
							<input class='form-control' type="datetime-local" name="tgl_akt_kal" value="<?php echo $tgl_kal;?>">
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
							  	<input class='form-control' type="text" name="k_rdk" value="<?php echo $ffsu['k_rdk'];?>" id="kons">
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
							  	<input type="text" class="form-control DsRd" name="volume" id="volume" value="<?php echo $ffsu['volume'];?>">  
							  	<div class="input-group-prepend">
							    	<span class="input-group-text">ml</span>
							  	</div>
							</div>
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_akt" placeholder="Ketidakpastian Pengukuran" value="<?php echo $ffsu['ktdk_akt'];?>">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label> Total Radioaktivitas atau Aktivitas Dikirim (Kons * Volume)</label>
					<div class="row">
						<div class="col">
							<div class="input-group mb-3">
							  	<input class='form-control' name="t_akt" type="text" id="totalKV" value="<?php echo $ffsu['t_akt'];?>" readonly>
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
							<input class='form-control' type="text" name="kejernihan" value="<?php echo $ffsu['kejernihan'];?>">
						</div>
						<div class="col-lg-6"></div>
					</div>
				</div>

				<div class="form-group">
					<label>Derajat Keasaman (pH)</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="der_keas" value="<?php echo $ffsu['der_keas'];?>">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_der" value="<?php echo $ffsu['ktdk_der'];?>" placeholder="Ketidakpastian Pengukuran">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Kemurnian Radionukida</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="kem_rdnu" value="<?php echo $ffsu['kem_rdnu'];?>">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_k_rdnu" value="<?php echo $ffsu['ktdk_k_rdnu'];?>" placeholder="Ketidakpastian Pengukuran">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Kemurnian Radiokimia</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="kem_rdkm" value="<?php echo $ffsu['kem_rdkm'];?>">
						</div>
						<div class="col-lg-6">
							<input class='form-control' type="text" name="ktdk_k_rdkm" value="<?php echo $ffsu['ktdk_k_rdkm'];?>" 
							placeholder="Ketidakpastian Pengukuran">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Fraksi</label>
					<div class="row">
						<div class="col-lg-6">
							<input class='form-control' type="text" name="fraksi" value="<?php echo $ffsu['fraksi'];?>">
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
							<input class='form-control' type="text" name="pengguna" value="<?php echo $ffsu['pengguna'];?>">
						</div>
						<div class="col"></div>
					</div>
				</div>
				<div class="form-group">
					<label>Range Waktu Peluruhan</label>
					<div class="row">
						<div class="col">
								<div class="input-group mb-3">
							  	<input class='form-control' type="text" name="r_w_pel" value="<?php echo $ffsu['r_w_pel'];?>"> 
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