
	function viewdata(){
	$('#loading').show();
       $.ajax({
	   type: "GET",
	   url: "engine/data/status.data.php"
      }).done(function( data ) {
			$('#loading').hide();
			$('#tampil').html(data);
      });
    }

	viewdata();

	function filterdata(){
		    $('#loading').show();
			var urlfilter = "engine/data/status.data.php";
			var status = $('#status').val();
			$("#tampil").load(urlfilter,{"filter":status}, function(respon){
				 $('#loading').hide();
			});
	}

	function toggle(source) {
		checkboxes = document.getElementsByName('chk');
		for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}

	$('.tampil_detail').live("click", function(){
			id = this.id;
			var urlform = 'includes/form-detail.php';

			$('#loading').fadeIn(800).delay(600).fadeOut();
			$("#tampil-folder").load(urlform,{"id":id}, function(responseTxt, statusTxt, xhr){
				if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
			}).fadeIn(1000);
		});

	function hapus_arsip()
	{
		id_array=new Array()
		i=0;
		var url_proses_hapus   		= 'engine/engine_arsip.php';
		var url_header    			= 'index.php?page=arsip';

		$("input.chk:checked").each(function(){
			id_array[i]=$(this).val();
			i++;
		})

		if(id_array == null || id_array == ""){
			//bootbox.alert("Belum ada data yang dipilih untuk dihapus.");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Belum ada data yang dipilih untuk dihapus.' +
											'</div>');
			return false;
		};

		//bootbox.confirm("Data ini dengan id "+id_array+" terpilih akan dihapus, Lanjutkan?", function(result) {
		var result = confirm("Data ini dengan id "+id_array+" terpilih akan dihapus, Lanjutkan?");
		if(result == true){
			$.ajax({
				url     : url_proses_hapus,
				data    : 'hapus='+id_array,
				type    : 'POST',
				dataType: 'html',
				success : function(respon){
					if(respon=='ok')
					{
						//bootbox.hideAll();
						window.location.assign(url_header);
					}else{
						//bootbox.alert("Gagal Menghapus Data !");
						$('#info').html('<div class="alert alert-warning">'+
															'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
															'Gagal Menghapus Data !' +
														'</div>');
					}
				},
			});
		}else{
		//	bootbox.hideAll();
		}
		return false;
		//});
	}

	function ubah_status()
	{
		var id	    	= $('#idproses').val();
		var status		= $('#status').val();
		var url_header  = 'index.php?page=arsip';

		if(status == null || status == ""){
			//bootbox.alert("Kode Register Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kode Register Harus diisi' +
											'</div>');
			return false;
		};

		var url_proses    	= 'engine/engine_proses.php';

		$.ajax({
			url     : url_proses,
			data    : 'ubah='+id+'&status='+status+'&id='+id,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#edit').modal('hide');
					window.location.assign(url_header);
				}
				else{
					//bootbox.alert("Pengiriman data gagal !");
					$('#info_edit').html('<div class="alert alert-warning">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !' +
													'</div>');
				}
			},
		});
	}

	$(document).on("click", ".edit-data", function () {
		var id 	 = $(this).data('id');

		$(".modal-body #idproses").val( id );
	});
