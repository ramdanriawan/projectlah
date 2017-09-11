function tampil_form()
	{
		var urlcek  	 = 'includes/cek-regis.php';
		var kode		 = $('#kode').val();
		var url_admin    = 'index.php?page=upload&kode='+kode;

		$.ajax({
        url     : urlcek,
        data    : 'kode='+kode,
        type    : 'POST',
        dataType: 'html',
        success : function(pesan){
            if(pesan=='ok'){
                window.location = url_admin;
            }
            else{
				//bootbox.alert("Data registrasi dengan Nomor : "+kode+" Tidak ditemukan !");
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Data registrasi dengan Nomor : '+kode+' Tidak ditemukan !'+
												'</div>');
            }
        },
    });
	}

function ubah_status()
	{
		var id	    	= $('#kode').val();
		var url_header  = 'index.php?page=arsip-status';

		if(id == null){
			//bootbox.alert("ID Kategori Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID Kategori Harus diisi'+
											'</div>');
			return false;
		};

		var url_proses    	= 'engine/engine_proses.php';

		$.ajax({
			url     : url_proses,
			data    : 'ubah-status='+id+'&id='+id,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					window.location.assign(url_header);
				}
				else{
					//bootbox.alert("Pengiriman data gagal !");
					$('#info').html('<div class="alert alert-warning">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !'+
													'</div>');
				}
			},
		});
	}
