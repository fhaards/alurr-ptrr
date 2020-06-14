///////////////////////////////SELECT VALUE///////////////////////////////
$(function() {
	var unitsList = {
		TBq: 0,
		GBq: 0.0370,
		MBq: 37,
		KBq: 37000,
		Bq: 37000000,
		mCi: 1
	};
	var unitsName = Object.keys(unitsList);
	

	$('input').keyup(function(){ 
		var konsValue  = Number($('#kons').val()); 
		var volumeValue = Number($('#volume').val());
		var totalKValue = konsValue * volumeValue;
		$('#totalKV').val(totalKValue);
		/////////AWAL DAN KALIBRASI////////////////
		var aktAwlValue=Number($('#aktAwl').val());
		$('#aktKal').val(konsValue);
		calculateBasedOnUnit();
	});

	$('#satuanID').change(function() {
		var unitName = $(this).val()
		if (!unitsName.includes(unitName)) alert('Pilih Satuan');
		calculateBasedOnUnit();
	});
	
	function calculateBasedOnUnit() {
		var unitName = $('#satuanID').val();
		var konsValue  = Number($('#kons').val()); 
		var volumeValue = Number($('#volume').val());
		var totalKValue = konsValue * volumeValue;
		/////////AWAL DAN KALIBRASI////////////////
		var aktAwlValue=Number($('#aktAwl').val());
		$('#aktKal').konsValue;

		var unitName = unitsName.includes(unitName) ? unitName : 'mCi';
		var aktConvS = aktAwlValue * unitsList[unitName];
		var konsConvS = konsValue * unitsList[unitName];

		$('#satuanPick').html(unitName);
		$('#satuanPick2').html(unitName);
		$('#satuanPick3').html(unitName);
		$('#satuanPick4').html(unitName);

		$('#aktAwlConv').val(aktConvS);
	

		$('#konsConv').val(konsConvS);
		$('#totalConv').val(totalKValue * unitsList[unitName]);
		
		$('#aktKalConv').val(konsConvS);

	}


});
