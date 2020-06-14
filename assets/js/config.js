$('.dropdown-toggle').dropdown();

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
$(document).ready( function () {
    $('#tableData').DataTable();
} );
$(document).ready( function () {
    $('#tableData2').DataTable();
} );
$(document).ready(function(){
	$(".img-preload").delay(2700).fadeOut("slow");
	$(".preloader").delay(3000).slideUp("slow");
});