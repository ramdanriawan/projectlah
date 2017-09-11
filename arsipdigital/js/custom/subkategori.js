	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/subkategori.data.php"
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
			var urlfilter = "engine/data/subkategori.data.php";
			var id_filter = $('#filter').val();
			$("#workplace").load(urlfilter,{"filter":id_filter}, function(respon){

			});
	}

	function simpan_subkategori()
	{
		var id_subkategori	    = $('#kode').val();
		var nama_subkategori	= $('#nama').val();
		var kategori			= $('#kategori').val();
		var keterangan 			= $('#keterangan').val();

		//Validasi Form
		if(id_subkategori == null || id_subkategori == ""){
			//bootbox.alert("ID subkategori Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID subkategori Harus diisi'+
											'</div>');
			return false;
		};
		if(nama_subkategori == null || nama_subkategori == ""){
			//bootbox.alert("Nama subkategori Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama subkategori Harus diisi'+
											'</div>');
			return false;
		};
		if(kategori == null || kategori == ""){
			//bootbox.alert("Kategori Harus dipilih");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kategori Harus dipilih'+
											'</div>');
			return false;
		};
		//Lakukan Ajax
		var url_proses    	= 'engine/engine_subkategori.php';
		//var url_header    	= 'index.php?page=subkategori';

		$.ajax({
			url     : url_proses,
			data    : 'simpan='+id_subkategori+'&nama='+nama_subkategori+'&ket='+keterangan+'&id='+id_subkategori+'&kategori='+kategori,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#tambah').modal('hide');
					$('#loading').fadeIn(800).delay(600).fadeOut();
					viewdata();
					$(".modal-body #koden").val( "" );
					$(".modal-body #nama").val( "" );
					$(".modal-body #kategori").val( "" );
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

	function ubah_subkategori()
	{
		var id_subkategori_edit	    	= $('#kodenya').val();
		var nama_subkategori_edit		= $('#namanya').val();
		var kategori_edit				= $('#kategorinya').val();
		var keterangan_edit 			= $('#keterangannya').val();

		//Validasi Form
		if(id_subkategori_edit == null || id_subkategori_edit == ""){
			//bootbox.alert("ID subkategori Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID subkategori Harus diisi'+
											'</div>');
			return false;
		};
		if(nama_subkategori_edit == null || nama_subkategori_edit == ""){
			//bootbox.alert("Nama subkategori Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama subkategori Harus diisi'+
											'</div>');
			return false;
		};
		if(kategori == null || kategori == ""){
			//bootbox.alert("Kategori Harus dipilih");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kategori Harus dipilih'+
											'</div>');
			return false;
		};
		var url_proses_edit    		= 'engine/engine_subkategori.php';
		var url_header    			= 'index.php?page=subkategori';

		$.ajax({
			url     : url_proses_edit,
			data    : 'ubah='+id_subkategori_edit+'&nama='+nama_subkategori_edit+'&ket='+keterangan_edit+'&id='+id_subkategori_edit+'&kategori='+kategori_edit,
			type    : 'POST',
			dataType: 'html',
			success : function(pesanedit){
				if(pesanedit=='ok'){
					$('#edit').modal('hide');
					$('#loading').fadeIn(800).delay(600).fadeOut();
					viewdata();

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Berhasil diubah'+
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

	function hapus_subkategori()
	{
		id_array=new Array()
		i=0;
		var url_proses_hapus   		= 'engine/engine_subkategori.php';
		var url_header    			= 'index.php?page=subkategori';

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
															'Berhasil dihapus'+
														'</div>');
					}else{
						//bootbox.alert("Gagal Menghapus Data !");
						$('#sukses').html('<div class="alert alert-danger">'+
															'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
															'Pengiriman data gagal !'+
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
		var id 	 		= $(this).data('id');
		var nama 		= $(this).data('nama');
		var ket  		= $(this).data('ket');
		var kategori  	= $(this).data('kategori');

		$(".modal-body #kodenya").val( id );
		$(".modal-body #namanya").val( nama );
		$(".modal-body #kategorinya").val( kategori );
		$(".modal-body #keterangannya").val( ket );
	});

	$("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').show();
        var page = $(this).attr("data-page");
        $("#workplace").load("engine/data/subkategori.data.php",{"halaman":page}, function(){
           $('#loading').hide();
        });

    });
