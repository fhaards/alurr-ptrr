<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Aplikasi Sertifikasi </title>
		<link rel="shortcut icon" href="<?php echo base_url().'assets/images/Logo_qc2.ico';?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.css';?>"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom_fontFaces.css';?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom_style.scss';?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.css';?>">
	</head>
	<body id="ThisBodyError">

	<div class="spacer30"></div>
	<div class="container contaier-fuild">
		<div class="row jumbotron errorpage  d-flex">
			<div class="col-md-6 col-lg-6 col-sm-12 m-0">
				<div class="isErrorText">	          
					<h3>OOPS !!</h3>
					<h1 class="display-4">PAGE NOT FOUND</h1>
					<p> This page is not available in this application </p>
					<a href="<?=base_url();?>homepage" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Homepage </a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-6 m-0">
				<object data="<?php echo base_url().'assets/images/img-component/404.svg';?>" 
	                class="img" type="image/svg+xml">
	            </object>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url().'assets/vendor/jquery/jquery.js';?>"></script> 
	<script src="<?php echo base_url().'assets/js/popper.js';?>"></script> 
	<script src="<?php echo base_url().'assets/vendor/js/bootstrap.js';?>"></script>
	<script src="<?php echo base_url().'assets/vendor/jquery/jquery.easing.min.js';?>"></script>


	</body>
</html>