<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<div class="page-header">
						<h1> Form Ubah <br><small> User/Operator </small></h1>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<?php echo validation_errors(); ?>
		<?php echo form_open('user/su/ubah-user/' . $getU['id_user']); ?>
		<div class="spacer30"></div>
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="form-group">
					<label>Nama User</label>
					<input type="text" class='form-control' value="<?php echo $getU['nama_user']; ?>" name="nama_user">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class='form-control' value="<?php echo $getU['email']; ?>" name="email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="hidden" class='form-control' value="<?php echo $getU['password']; ?>" name="oldpassword">
					<input type="password" class='form-control' value="" name="password">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-send"></i> Kirim
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>