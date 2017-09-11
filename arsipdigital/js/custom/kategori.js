	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/kategori.data.php"
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
			var urlfilter = "engine/data/kategori.data.php";
			var id_filter = $('#filter').val();
			$("#workplace").load(urlfilter,{"filter":id_filter}, function(respon){

			});
	}

	function simpan_kategori()
	{
		var id_kategori	    = $('#kode').val();
		var nama_kategori	= $('#nama').val();
		var keterangan 		= $('#keterangan').val();


		if(id_kategori == null || id_kategori == ""){
			//bootbox.alert("ID Kategori Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID Kategori Harus diisi'+
											'</div>');
			return false;
		};
		if(nama_kategori == null || nama_kategori == ""){
			//bootbox.alert("Nama Kategori Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama Kategori Harus diisi'+
											'</div>');
			return false;
		};


		var url_proses    	= 'engine/engine_kategori.php';

		$.ajax({
			url     : url_proses,
			data    : 'simpan='+id_kategori+'&nama='+nama_kategori+'&ket='+keterangan+'&id='+id_kategori,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#loading').fadeIn(800).delay(600).fadeOut();
					viewdata();
					$('#tambah').modal('hide');
					$(".modal-body #kode").val( "" );
					$(".modal-body #nama").val( "" );
					$(".modal-body #keterangan").val( "" );

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Sukses !'+
													'</div>');
				}
				else{
					//bootbox.alert("Pengiriman data gagal !");
					$('#info').html('<div class="alert alert-danger">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !'+
													'</div>');
				}
			},
		});
	}

	function ubah_kategori()
	{
		var id_kategori_edit	    = $('#kodenya').val();
		var nama_kategori_edit		= $('#namanya').val();
		var keterangan_edit 		= $('#keterangannya').val();


		if(id_kategori_edit == null || id_kategori_edit == ""){
			//bootbox.alert("ID Kategori Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID Kategori Harus diisi'+
											'</div>');
			return false;
		};
		if(nama_kategori_edit == null || nama_kategori_edit == ""){
			//bootbox.alert("Nama Kategori Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama Kategori Harus diisi'+
											'</div>');
			return false;
		};

		var url_proses_edit    		= 'engine/engine_kategori.php';
		var url_header    			= 'index.php?page=kategori';

		$.ajax({
			url     : url_proses_edit,
			data    : 'ubah='+id_kategori_edit+'&nama='+nama_kategori_edit+'&ket='+keterangan_edit+'&id='+id_kategori_edit,
			type    : 'POST',
			dataType: 'html',
			success : function(pesanedit){
				if(pesanedit=='ok'){
					$('#edit').modal('hide');
					$('#loading').fadeIn(800).delay(600).fadeOut();
					viewdata();

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Sukses !'+
													'</div>');
				}
				else{
					//bootbox.alert("Pengiriman data gagal !");
					$('#info_edit').html('<div class="alert alert-danger">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !'+
													'</div>');
				}
			},
		});
	}

	function hapus_kategori()
	{
		id_array=new Array()
		i=0;
		var url_proses_hapus   		= 'engine/engine_kategori.php';
		var url_header    			= 'index.php?page=kategori';

		$("input.chk:checked").each(function(){
			id_array[i]=$(this).val();
			i++;
		})

		if(id_array == null || id_array == ""){
			//bootbox.alert("Belum ada data yang dipilih untuk dihapus.");
			$('#sukses').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Belum ada data yang dipilih untuk dihapus.'+
											'</div>');
			return false;
		};

		//bootbox.confirm("Data ini dengan id terpilih akan dihapus, Lanjutkan?", function(result) {
		var result = confirm("Data ini dengan id terpilih akan dihapus, Lanjutkan?, Lanjutkan?");
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
						$('#loading').fadeIn(800).delay(600).fadeOut();
						viewdata();
						$('#sukses').html('<div class="alert alert-success">'+
															'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
															'Berhasil Menghapus Data.'+
														'</div>');
					}else{
						//bootbox.alert("Gagal Menghapus Data !");
						$('#sukses').html('<div class="alert alert-danger">'+
															'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
															'Gagal Menghapus Data !'+
														'</div>');
					}
				},
			});
		}else{
			//bootbox.hideAll();
		}
		return false;
		//});
	}

	$(document).on("click", ".edit-data", function () {
		var id 	 = $(this).data('id');
		var nama = $(this).data('nama');
		var ket  = $(this).data('ket');

		$(".modal-body #kodenya").val( id );
		$(".modal-body #namanya").val( nama );
		$(".modal-body #keterangannya").val( ket );
	});

	$("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').show();
        var page = $(this).attr("data-page");
        $("#workplace").load("engine/data/kategori.data.php",{"halaman":page}, function(){
           $('#loading').hide();
        });

    });
