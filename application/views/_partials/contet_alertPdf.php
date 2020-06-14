<?php if($this->session->flashdata('RsMci')): ?>
 	<script type="text/javascript"> 
		swal({
			title: 'Proses . . .',
			text: "Membuat File PDF",
			timer: 3000,
			imageWidth: 200,
			allowEscapeKey: false,
			allowOutsideClick: false,
			showConfirmButton: false ,
		}).then(
			function () {
			window.location.href = "laporan/cetak";
			},
			function (dismiss) {
			if (dismiss === 'timer') {
			window.location.href = "laporan/cetak";
			}
		})	
  	</script>
<?php endif; ?>
