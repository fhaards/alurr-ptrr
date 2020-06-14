<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logo_alurr/alurr-ico.ico'; ?>">
	<?php $this->load->view('_partials/_css.php'); ?>
	<script src="<?php echo base_url() . 'assets/sweetalert/sweetalert2.min.js'; ?>" language="javascript"></script>
	<script src="<?php echo base_url() . 'assets/sweetalert/sweetalert2.js'; ?>" language="javascript"></script>
</head>

<body>
	<div class="overlay"></div>
	<?php $this->load->view('_partials/navbar'); ?>
	<div class="wrapper d-flex align-items-stretch">
		<?php $this->load->view('_partials/modal'); ?>
		<?php $this->load->view('_partials/sidebar'); ?>
		<div id="content">
			<div class="content-s">
				<?php $this->load->view('_partials/content_alert'); ?>
				<?php $this->load->view($content); ?>
				<?php $this->load->view('_partials/footer'); ?>
			</div>
		</div>
	</div>
	<!---- ///////////// LOAD JS ////////////////// -->
	<script>
		var base_url = "<?= base_url(); ?>";
	</script>
	<?php $this->load->view('_partials/_js.php'); ?>
</body>

</html>