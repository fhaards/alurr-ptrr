<div class="card homepage-info">
	<div class="card-body">
		<div class="row p-1">
			<div class="col-lg-6">
				<h1 class="display-4 animated slideInUp">Selamat Datang</h1>
				<p class="lead animated slideInDown">
					di Aplikasi Laporan Hasil Uji QC<br>
					Laboratorium Uji Radioisotop dan Radiofarmaka<br>
					PTRR-BATAN</p>
			</div>
			<div class="col-lg-6 ">
				<object data="<?php echo base_url() . 'assets/images/logo_alurr/alurrLogo_White.svg'; ?>" class="img animated slideInUp" type="image/svg+xml">
				</object>
				&nbsp;
				<img src="<?php echo base_url() . 'assets/images/logo_batan_white.png'; ?>" class="img animated slideInDown">
			</div>
		</div>
	</div>
</div>


<div class="row m-0">
	<div class="col  p-0">
		<?php $this->load->view('_partials/laporanBaru'); ?>
	</div>
	<div class="col  p-0">
		<?php $this->load->view('_partials/data_count'); ?>
	</div>
</div>