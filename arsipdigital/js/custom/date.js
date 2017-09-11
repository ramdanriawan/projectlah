$(function() {
		$( "#tgl_estimasi" ).datepicker({
			dateFormat:'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
		
		$( "#tgl_filter" ).datepicker({
			dateFormat:'dd-mm-yy',
			changeMonth: true
		});
		
	});