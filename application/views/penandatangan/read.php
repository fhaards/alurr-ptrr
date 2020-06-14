<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> Penandatangan <br>
						<small>Tanda tangan pada sertifikat</small></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="spacer30"></div>
				<?php foreach ($pny as $pn) {
					$id = $pn->id_p;
					$nama = $pn->nama;
					$jabatan = $pn->jabatan;
					$nip = $pn->nip;
				?>
					<div class="">
						<form method="post" class="animated " action="<?php echo base_url('penandatangan/ubah/' . $id) ?>">
							<div class="form-group">
								<label>Nama </label>
								<input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" required>
							</div>
							<div class="form-group">
								<label>Jabatan </label>
								<input class="form-control" type="text" name="jabatan" value="<?php echo $jabatan; ?>" required>
							</div>
							<div class="form-group">
								<label>NIP </label>
								<input class="form-control" type="text" name="nip" value="<?php echo $nip; ?>" required>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">
								<i class="fa fa-edit"></i> Ubah
							</button>
						</form>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>