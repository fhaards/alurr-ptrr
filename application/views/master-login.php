<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
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

<body id="thisBodyLogin">
	<?php $this->load->view('_partials/preloader.php'); ?>
	<div class="overlay"></div>
	<?php $this->load->view($content); ?>
	<!---- ///////////// LOAD JS ////////////////// -->
	<?php $this->load->view('_partials/_js.php'); ?>

</body>

</html>