<div class="t-pel-head">
	<img src="assets/images/kop-decay.jpg"/>
</div>
<br>
<div class="row">
	<span class="text-batch">
		No. Decay : <?php echo $nolap; ?>
	</span>
</div>

<div class="spacer30"></div>

<div class="t-pel-produk">
	<div class="left">
		<h5>
	    	RADIOISOTOP : <br>
	    	<?php echo $nproduk;?>
	    	<br><br>
	    	Waktu Paruh : <br>
	    	<?php echo $waktu."<br> ".$satuan;?>
	    </h5>	
	</div>
	<div class="right">
		<div class="right-top">
			DATA PRODUK
		</div>
		<div class="right-bottom">
			<div class="rb-left">
				<br>
				<table class="tb-rb-left" width="100px">
					<tr>
						<td class='td-r'>Bentuk Produk</td>
						<td class='td-l'>: <?php echo $jenis_smpl; ?></td>
					</tr>
					<tr>
						<td class='td-r'>Kons. Radioaktivitas</td>
						<td class='td-l'>: <?php echo $k_rdk." ".$S_Satuan;?>/ml</td>
					</tr>
					<tr>
						<td class='td-r'>Volume</td>
						<td class='td-l'>: <?php echo $vol_baru; ?> ml</td>
					</tr>
					<tr>
						<td class='td-r'>Total Radioaktivitas</td>
						<td class='td-l'>: <?php echo $t_akt." ".$S_Satuan; ?></td>
					</tr>
					<tr>
						<td class='td-r'>Tanggal Kalibrasi</td>
						<td class='td-l'>: <?php echo $tgl_kal_f; ?></td>
					</tr>
				</table>
			</div>
			<div class="rb-right">
				<br>
				<table class="tb-rb-right">
					<tr>
						<td class='td-r'>No. Batch</td>
						<td class='td-l'>: <?php echo $no_batch;?></td>
					</tr>
					<tr>
						<td class='td-r'>Fraksi</td>
						<td class='td-l'>: <?php echo $fraksi;?> </td>
					</tr>
					<tr>
						<td class='td-r'>Tgl. Produksi</td>
						<td class='td-l'>: <?php echo $tgl_peng_f; ?></td>
					</tr>
					<tr>
						<td class='td-r'>Pengguna</td>
						<td class='td-l'>: <?php echo $pengguna; ?></td>
					</tr>

				</table>
			</div>
		</div>
	</div>
</div>