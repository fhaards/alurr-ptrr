<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<div class="page-header">
						<h1> Data User <br> <small>User List</small></h1>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="spacer30"></div>
<div class="card">
	<div class="card-body">
		<a href="<?php echo site_url('user/su/tambah-user'); ?>" class="btn btn-primary">
			<i class="fa fa-plus-circle"></i> Tambah User
		</a>
		<div class="spacer30"></div>
		<table  id="tableData" class="table table-responsive-sm " width='100%'>
			<thead>
				<tr>
					<th class="t-sm"> Nama User </th>
					<th>Email</th>
					<th>Password</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($fuser as $fu) {
					$iduser = $fu['id_user'];
				?>
					<tr>
						<td class="t-sm"><?php echo $fu['nama_user']; ?></td>
						<td><?php echo $fu['email']; ?></td>
						<td class="text-center"><?php echo $fu['password']; ?></td>
						<td class="text-center">
							<div class="aksi-lg">
								<div class="btn-group dropleft">
									<button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-list-ul"></i>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="<?php echo site_url('user/su/ubah-user/' . $iduser); ?>">
											<i class="fa fa-edit"></i> Ubah</a>
										<div class="dropdown-divider"></div>
										<a onclick="deleteConfirm('<?php echo site_url('user/su/hapus/' . $iduser) ?>')" href="#!" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Hapus</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>