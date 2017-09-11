	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/bulanan.data.php"
      }).done(function( data ) {
	  $('#workplace').html(data);
      });
    }
	
	function viewdetail(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/rekapdetail.data.php"
      }).done(function( data ) {
	  $('#workplacedetail').html(data);
      });
    }
	
	$('#loading').fadeIn(800).delay(600).fadeOut();
	viewdata();
	viewdetail();
	

	function filterdata(){
		    $('#loading').show();
			var urlfilter = "engine/data/bulanan.data.php";
			var bulan = $('#bulan').val();
			$("#workplace").load(urlfilter,{"filter":bulan}, function(respon){
				 $('#loading').hide();
			});
			$('#subkategori').val("");
			$("#workplacedetail").hide();
	}
	
	function filtersub(){
		var urlfilter = "engine/data/rekapdetail.data.php";
		var bulan = $('#bulan').val();
		
			if(bulan == null || bulan == ""){
				var bulan = 1;
			};
		    $('#loading').show();
			
			var sub	  = $('#subkategori').val();
			$("#workplacedetail").load(urlfilter,{"filtersub":sub,"bulan":bulan}, function(respon){
				$("#workplacedetail").show();
				$('#loading').hide();
			});
	}
	
	
	$("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').show();
        var page = $(this).attr("data-page"); 
        $("#workplace").load("engine/data/bulanan.data.php",{"halaman":page}, function(){ 
           $('#loading').hide();
        });
        
    });
	
	function popup_print() 
	{	
	var bulan = $('#bulan').val();
	var sub	  = $('#subkategori').val();
	
		if(bulan == null || bulan == ""){
			var bulan = 1;
		};
		
		//if(sub == null || sub == ""){
			//bootbox.alert("Kategori Belum Dipilih");
			//return false;
		//};
		window.open('includes/lap_kategori.php?bulan='+bulan+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
	}
	
	function popup_printsub() 
	{	
	var bulan = $('#bulan').val();
	var sub	  = $('#subkategori').val();
	
		if(bulan == null || bulan == ""){
			var bulan = 1;
		};
		
		//if(sub == null || sub == ""){
			//bootbox.alert("Kategori Belum Dipilih");
			//return false;
		//};
		window.open('includes/lap_sub.php?bulan='+bulan+'&sub='+sub+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
	}
	
