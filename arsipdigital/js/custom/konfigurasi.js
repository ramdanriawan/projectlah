function simpan_instansi()
	{
		var nama	    = $('#namainstansi').val();
		var pimpinan	= $('#pimpinan').val();
		
		
		//Validasi Form
		if(nama == null || nama == ""){
			bootbox.alert("Nama Instansi Harus diisi");
			return false;
		};
		if(pimpinan == null || pimpinan == ""){
			bootbox.alert("Nama Pimpinan Harus diisi");
			return false;
		};
		//Lakukan Ajax
		var url_proses    	= 'engine/engine_konfigurasi.php';
		//var url_header    	= 'index.php?page=subkategori';
     
		$.ajax({
			url     : url_proses,
			data    : 'simpan='+nama+'&nama='+nama+'&pimpinan='+pimpinan, 
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#konfigurasi').modal('hide');
					alert("Nama Instansi Berhasil di Simpan");
				}
				else{
					bootbox.alert("Pengiriman data gagal !");
				}
			},
		});
	}