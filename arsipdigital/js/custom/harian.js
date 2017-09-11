	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/harian.data.php"
      }).done(function( data ) {
	  $('#workplace').html(data);
      });
    }
	
	$('#loading').fadeIn(800).delay(600).fadeOut();
	viewdata();
	
	function toggle(source) {
		checkboxes = document.getElementsByName('chk');
		for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}
	
	function filterdata(){
		    $('#loading').show();
			var urlfilter = "engine/data/harian.data.php";
			var id_filter = $('#tgl_filter').val();
			$("#workplace").load(urlfilter,{"filter":id_filter}, function(respon){
				 $('#loading').hide();
			});
	}
	
	
	$("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').show();
        var page = $(this).attr("data-page"); 
        $("#workplace").load("engine/data/harian.data.php",{"halaman":page}, function(){ 
           $('#loading').hide();
        });
        
    });
	
	function popup_print() 
	{	
		var id_filter = $('#tgl_filter').val();
		window.open('includes/lap_harian.php?tgl='+id_filter+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
	}
	
	
