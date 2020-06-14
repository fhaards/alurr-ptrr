$(document).ready(function () {
	$("#nolap").change(function () {
		$("#username_result").text("").fadeIn("slow");
		var no_lap = $("#nolap").val();
		if (no_lap != "") {
			$.ajax({
				url: base_url + "dataexist/data_exist",
				method: "POST",
				data: { no_lap: no_lap },
				success: function (data) {
					$("#username_result").html(data);
				},
			});
		}
	});
});

$(document).ready(function () {
	$("#nolap2").change(function () {
		$("#username_result").text("").fadeIn("slow");
		var no_lap = $("#nolap2").val();
		if (no_lap != "") {
			$.ajax({
				url: base_url + "dataexist/data_exist2",
				method: "POST",
				data: { no_lap: no_lap },
				success: function (data) {
					$("#username_result").html(data);
				},
			});
		}
	});
});
