<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<div class="page-header">
						<h1> Profil <br> <small>User Profil</small></h1>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="spacer30"></div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					Nama User : <br>
					<strong><?= getUserData()['nama_user']; ?></strong>
				</div>
				<div class="form-group">
					Email : <br>
					<strong><?= getUserData()['email']; ?></strong>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<?php 
					$iduser=getUserData()['id_user'];
				?>
				<a href="<?php echo site_url('user/op/ubah-data/'.$iduser);?>" class="btn btn-primary">
					<i class="fa fa-edit"></i> Ubah Data 
				</a>
			</div>
		</div>
	</div>
</div>
