<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<div class="page-header">
					<h1> Activity Log <br><small> 	<div class="form-group"><?= $contentTableName; ?></div></small></h1>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
			</div>
		</div>
	</div>
</div>

<div class="card">
  	<div class="card-body">
		<form method="GET" action="<?php echo site_url('log-activity');?>">
			<div class="row">
				<div class="col-lg-1 col-sm-1">
					<div class="form-group">
						<label class='mt-2'> Pilih Log </label>
					</div>
				</div>
				<div class="col-lg-4 col-sm-10">
					<div class="form-group">
						<select class="form-control" name="jenisLog">
							<?php foreach ($optionData as $eachOption): ?>
								<option value="<?= $eachOption['value']; ?>" <?= $eachOption['selectedStatus'];?>><?= $eachOption['wording']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-lg-1 col-sm-1">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Filter">
					</div>
				</div>
			</div>
		</form>

		<?php
			$this->load->view($contentTable);
		?>
	</div>
</div>
