
<!-- //////////////// LAPORAN AKTIF///////////////// -->
	<!-- //////////////// NON GROUP ///////////////// -->
		<datalist id="no_lap">
			<?php 
				foreach($dtlst1 as $dnolaps){
				echo "<option value='$dnolaps[no_lap]'>";
				}
			?>
		</datalist>

		<datalist id="no_batch">
			<?php 
				foreach($dtlst1 as $dnobatch){
				echo "<option value='$dnobatch[no_batch]'>";
				}
			?>
		</datalist>

		<datalist id="k_ling">
			<?php 
				foreach($dtlst1 as $dkling){
				echo "<option value='$dkling[k_ling]'>";
				}
			?>
		</datalist>

		<datalist id="ktdk_akt">
			<?php 
				foreach($dtlst1 as $dktdk_akt){
				echo "<option value='$dktdk_akt[ktdk_akt]'>";
				}
			?>
		</datalist>

		<datalist id="der_keas">
			<?php 
				foreach($dtlst1 as $dder_keas){
				echo "<option value='$dder_keas[der_keas]'>";
				}
			?>
		</datalist>

		<datalist id="ktdk_der">
			<?php 
				foreach($dtlst1 as $dktdk_der){
				echo "<option value='$dktdk_der[ktdk_der]'>";
				}
			?>
		</datalist>

		<datalist id="kem_rdnu">
			<?php 
				foreach($dtlst1 as $dkem_rdnu){
				echo "<option value='$dkem_rdnu[kem_rdnu]'>";
				}
			?>
		</datalist>

		<datalist id="kem_rdnu">
			<?php 
				foreach($dtlst1 as $dkem_rdnu){
				echo "<option value='$dkem_rdnu[kem_rdnu]'>";
				}
			?>
		</datalist>

		<datalist id="ktdk_k_rdnu">
			<?php 
				foreach($dtlst1 as $dktdk_k_rdnu){
				echo "<option value='$dktdk_k_rdnu[ktdk_k_rdnu]'>";
				}
			?>
		</datalist>

		<datalist id="kem_rdkm">
			<?php 
				foreach($dtlst1 as $dkem_rdkm){
				echo "<option value='$dkem_rdkm[kem_rdkm]'>";
				}
			?>
		</datalist>

		<datalist id="ktdk_k_rdkm">
			<?php 
				foreach($dtlst1 as $dktdk_k_rdkm){
				echo "<option value='$dktdk_k_rdkm[ktdk_k_rdkm]'>";
				}
			?>
		</datalist>

	<!-- /////////////// GROUP /////////////////// -->
		<datalist id="pemilik">
			<?php 
				foreach($dtlst2a as $dpemilik){
				echo "<option value='$dpemilik[pemilik]'>";
				}
			?>
		</datalist>

		<datalist id="jumlah_smpl">
			<?php 
				foreach($dtlst2b as $djumlah_smpl){
				echo "<option value='$djumlah_smpl[jumlah_smpl]'>";
				}
			?>
		</datalist>

		<datalist id="jenis_smpl">
			<?php 
				foreach($dtlst2c as $djenis_smpl){
				echo "<option value='$djenis_smpl[jenis_smpl]'>";
				}
			?>
		</datalist>


		<datalist id="fraksi">
			<?php 
				foreach($dtlst2d as $dfraksi){
				echo "<option value='$dfraksi[fraksi]'>";
				}
			?>
		</datalist>

		<datalist id="pengguna">
			<?php 
				foreach($dtlst2e as $dpengguna){
				echo "<option value='$dpengguna[pengguna]'>";
				}
			?>
		</datalist>

		<datalist id="kejernihan">
			<?php 
				foreach($dtlst2f as $dkejernihan){
				echo "<option value='$dkejernihan[kejernihan]'>";
				}
			?>
		</datalist>

		<datalist id="akt_awal">
			<?php 
				foreach($dtlst2g as $dakt_awal){
				echo "<option value='$dakt_awal[akt_awal]'>";
				}
			?>
		</datalist>

		<datalist id="k_rdk">
			<?php 
				foreach($dtlst2h as $dk_rdk){
				echo "<option value='$dk_rdk[k_rdk]'>";
				}
			?>
		</datalist>

		<datalist id="no_batchkf">
			<?php 
				foreach($dtlst3 as $dno_batchkf){
				echo "<option value='$dno_batchkf[no_batch_kf]'>";
				}
			?>
		</datalist>

<!-- //////////////// LAPORAN NON AKTIF///////////////// -->
	<datalist id="no_lap_na">
		<?php 
			foreach($dtlstNa1 as $dtlst_1){
			echo "<option value='$dtlst_1[no_lap_na]'>";
			}
		?>
	</datalist>

	<datalist id="pemilik_na">
		<?php 
			foreach($dtlstNa2 as $dtlst_2){
			echo "<option value='$dtlst_2[pemilik_na]'>";
			}
		?>
	</datalist>

	<datalist id="jumlah_smpl_na">
		<?php 
			foreach($dtlstNa3 as $dtlst_3){
			echo "<option value='$dtlst_3[jumlah_smpl_na]'>";
			}
		?>
	</datalist>

	<datalist id="no_batch_na">
		<?php 
			foreach($dtlstNa4 as $dtlst_4){
			echo "<option value='$dtlst_4[no_batch_na]'>";
			}
		?>
	</datalist>

	<datalist id="no_batchkf_na">
		<?php 
			foreach($dtlstNa5 as $dtlst_5){
			echo "<option value='$dtlst_5[no_batchkf_na]'>";
			}
		?>
	</datalist>

	<datalist id="k_ling_na">
		<?php 
			foreach($dtlstNa6 as $dtlst_6){
			echo "<option value='$dtlst_6[k_ling_na]'>";
			}
		?>
	</datalist>

	<!-- HASIL -->

	<datalist id="bentuk_fisik">
		<?php 
			foreach($dtlstNa7 as $dtlst_7){
			echo "<option value='$dtlst_7[bentuk_fisik_lp]'>";
			}
		?>
	</datalist>

	<datalist id="der_keas_na">
		<?php 
			foreach($dtlstNa8 as $dtlst_8){
			echo "<option value='$dtlst_8[der_keas_na_lp]'>";
			}
		?>
	</datalist>

	<datalist id="ktdk_bntg_der">
		<?php 
			foreach($dtlstNa9 as $dtlst_9){
			echo "<option value='$dtlst_9[ktdk_bntg_der]'>";
			}
		?>
	</datalist>

	<datalist id="kem_rdkm_na_lp">
		<?php 
			foreach($dtlstNa10 as $dtlst_10){
			echo "<option value='$dtlst_10[kem_rdkm_na_lp]'>";
			}
		?>
	</datalist>

	<datalist id="ktdk_bntg_rdkm">
		<?php 
			foreach($dtlstNa11 as $dtlst_11){
			echo "<option value='$dtlst_11[ktdk_bntg_rdkm]'>";
			}
		?>
	</datalist>


	<datalist id="sterilitas_lp">
		<?php 
			foreach($dtlstNa12 as $dtlst_12){
			echo "<option value='$dtlst_12[sterilitas_lp]'>";
			}
		?>
	</datalist>

	<datalist id="pirogenitas_lp">
		<?php 
			foreach($dtlstNa13 as $dtlst_13){
			echo "<option value='$dtlst_13[pirogenitas_lp]'>";
			}
		?>
	</datalist>
