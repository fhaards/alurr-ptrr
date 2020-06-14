$(document).ready(function () {
	$(".dropdown-toggle").dropdown();
	$('[data-toggle="tooltip"]').tooltip();
	//DATA TABLES
	$("#tableData").DataTable();
	$("#tableData2").DataTable();
});

$(document).ready(function () {
	if (!sessionStorage.getItem("dontLoad") == null) {
		$(".loading, .preloader").hide();
	} else {
		$(".loading").delay(1500).fadeOut("slow");
		$(".preloader").delay(2000).slideUp("slow");
	}
});

(function ($) {
	"use strict";
	var fullHeight = function () {
		$(".js-fullheight").css("height", $(window).height());
		$(window).resize(function () {
			$(".js-fullheight").css("height", $(window).height());
		});
	};
	fullHeight();
	$("#sidebarCollapse").on("click", function () {
		$("#sidebar").toggleClass("active");
		$(".content-s").toggleClass("hide-content");
	});
})(jQuery);

function deleteConfirm(url) {
	$("#btn-delete").attr("href", url);
	$("#deleteModal").modal();
}
function gantiStatus(url) {
	$("#btn-cange").attr("href", url);
	$("#cangeStatusPrdk").modal();
}
function changeBar(x) {
	x.classList.toggle("change");
}
