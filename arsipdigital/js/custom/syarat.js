	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/syarat.data.php"
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
			var urlfilter = "engine/data/syarat.data.php";
			var id_filter = $('#filter').val();
			$("#workplace").load(urlfilter,{"filter":id_filter}, function(respon){

			});
	}

	function simpan_syarat()
	{
		var id_syarat			= $('#kode').val();
		var nama_syarat			= $('#nama').val();
		var subkategori			= $('#subkategori').val();
		var keterangan 			= $('#keterangan').val();


		if(nama_syarat == null || nama_syarat == ""){
			//bootbox.alert("Nama syarat Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama syarat Harus diisi'+
											'</div>');
			return false;
		};
		if(subkategori == null || subkategori == ""){
			//bootbox.alert("Kategori Harus dipilih");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kategori Harus dipilih'+
											'</div>');
			return false;
		};

		var url_proses    	= 'engine/engine_syarat.php';
		//var url_header    	= 'index.php?page=syarat';

		$.ajax({
			url     : url_proses,
			data    : 'simpan='+nama_syarat+'&nama='+nama_syarat+'&ket='+keterangan+'&subkategori='+subkategori+'&id='+id_syarat,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('.tbl1 tr').last().after('<tr><td><input type="checkbox" name="chk[]" class="chk" value="'+id_syarat+'"></td><td>'+id_syarat+'</td><td>'+nama_syarat+'</td><td>'+subkategori+'</td><td><a href="#edit" data-toggle="modal" class="edit-data tip" data-id="'+id_syarat+'" data-nama="'+nama_syarat+'" data-subkategori="'+subkategori+'" data-ket="'+keterangan+'" title="Ubah Data Operator"><span class="icon-edit"></span></a></td></tr>');
					$('#tambah').modal('hide');

					$(".modal-body #kode").val( "" );
					$(".modal-body #nama").val( "" );
					$(".modal-body #subkategori").val( "" );
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

	function ubah_syarat()
	{
		var id_syarat_edit	    		= $('#kodenya').val();
		var nama_syarat_edit			= $('#namanya').val();
		var subkategori_edit			= $('#subkategorinya').val();
		var keterangan_edit 			= $('#keterangannya').val();


		if(nama_syarat_edit == null || nama_syarat_edit == ""){
			//bootbox.alert("Nama syarat Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama syarat Harus diisi'+
											'</div>');
			return false;
		};
		if(subkategori == null || subkategori == ""){
			//bootbox.alert("Nama syarat Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kategori Harus diisi'+
											'</div>');
			return false;
		};
		var url_proses_edit    		= 'engine/engine_syarat.php';
		var url_header    			= 'index.php?page=syarat';

		$.ajax({
			url     : url_proses_edit,
			data    : 'ubah='+id_syarat_edit+'&nama='+nama_syarat_edit+'&ket='+keterangan_edit+'&id='+id_syarat_edit+'&subkategori='+subkategori_edit,
			type    : 'POST',
			dataType: 'html',
			success : function(pesanedit){
				if(pesanedit=='ok'){
					$('#edit').modal('hide');
					$('#loading').show();
					viewdata();
					$('#loading').hide();

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Berhasil diubah !'+
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

	function hapus_syarat()
	{
		id_array=new Array()
		i=0;
		var url_proses_hapus   		= 'engine/engine_syarat.php';
		var url_header    			= 'index.php?page=syarat';

		$("input.chk:checked").each(function(){
			id_array[i]=$(this).val();
			i++;
		})

		if(id_array == null || id_array == ""){
			bootbox.alert("Belum ada data yang dipilih untuk dihapus.");
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
						$('#loading').show();
						viewdata();
						$('#loading').hide();

						$('#sukses').html('<div class="alert alert-success">'+
															'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
															'Sukses !'+
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
		var id 	 			= $(this).data('id');
		var nama 			= $(this).data('nama');
		var ket  			= $(this).data('ket');
		var subkategori  	= $(this).data('subkategori');

		$(".modal-body #kodenya").val( id );
		$(".modal-body #namanya").val( nama );
		$(".modal-body #subkategorinya").val( subkategori );
		$(".modal-body #keterangannya").val( ket );
	});

	$("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').show();
        var page = $(this).attr("data-page");
        $("#workplace").load("engine/data/syarat.data.php",{"halaman":page}, function(){
           $('#loading').hide();
        });

    });
