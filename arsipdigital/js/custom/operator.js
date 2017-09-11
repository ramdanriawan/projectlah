	function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "engine/data/operator.data.php"
      }).done(function( data ) {
	  $('#workplace').html(data);
      });
    }

	viewdata();

	function filterdata(){
			var urlfilter = "engine/data/operator.data.php";
			var id_filter = $('#filter').val();
			$("#workplace").load(urlfilter,{"filter":id_filter}, function(respon){

			});
	}

	function toggle(source) {
		checkboxes = document.getElementsByName('chk');
		for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}

	function simpan_operator()
	{
		var id_operator	    = $('#kode').val();
		var nama_operator	= $('#nama').val();
		var level 			= $('#level').val();
		var password 		= $('#password').val();
		var password1 		= $('#password1').val();

		if(id_operator == null || id_operator == ""){
			//alert("ID operator Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'ID operator Harus diisi'+
											'</div>');
			return false;
		};
		if(nama_operator == null || nama_operator == ""){
			//alert("Nama operator Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Nama operator Harus diisi'+
											'</div>');
			return false;
		};
		if(password == null || password1 == ""){
			//alert("Password Harus diisi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Password Harus diisi'+
											'</div>');
			return false;
		};

		if(password != password1){
			//alert("Password Belum Sama");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Password Belum Sama'+
											'</div>');
			return false;
		};


		var url_proses    	= 'engine/engine_operator.php';


		$.ajax({
			url     : url_proses,
			data    : 'simpan='+id_operator+'&nama='+nama_operator+'&level='+level+'&id='+id_operator+'&password='+password,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#tambah').modal('hide');
					$('#loading').fadeIn(800).delay(600).fadeOut();
					viewdata();
					$(".modal-body #kode").val( "" );
					$(".modal-body #nama").val( "" );
					$(".modal-body #level").val( "" );
					$(".modal-body #password").val( "" );
					$(".modal-body #password1").val( "" );

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Berhasil ditambah !'+
													'</div>');
				}
				else{
					//alert("Pengiriman data gagal !");
					$('#info').html('<div class="alert alert-danger">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !'+
													'</div>');
				}
			},
		});
	}


	function edit_operator()
	{
		var id_operator_edit	= $('#kodenya').val();
		var nama_operator_edit	= $('#namanya').val();
		var level_edit 			= $('#levelnya').val();
		var password_edit 		= $('#passwordnya').val();
		var password1_edit 		= $('#password1nya').val();

		//Validasi Form
		if(password_edit == null || password1_edit == ""){
			//alert("Password Harus diisi");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Password Harus diisi'+
											'</div>');
			return false;
		};

		if(password_edit != password1_edit){
			//alert("Password Belum Sama");
			$('#info_edit').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Password Belum Sama'+
											'</div>');
			return false;
		};

		//Lakukan Ajax
		var url_proses    	= 'engine/engine_operator.php';
		var url_header    	= 'index.php?page=operator';
		$('#loading').show();
		$.ajax({
			url     : url_proses,
			data    : 'ubah='+id_operator_edit+'&nama='+nama_operator_edit+'&level='+level_edit+'&id='+id_operator_edit+'&password='+password_edit,
			type    : 'POST',
			dataType: 'html',
			success : function(pesan){
				if(pesan=='ok'){
					$('#edit').modal('hide');
					$('#loading').hide();
					viewdata();

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Berhasil diubah !'+
													'</div>');
				}
				else{
					//alert("Pengiriman data gagal !");
					$('#info_edit').html('<div class="alert alert-danger">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Pengiriman data gagal !'+
													'</div>');
				}
			},
		});
	}


	function hapus_operator()
	{
		id_array=new Array()
		i=0;
		var url_proses_hapus   		= 'engine/engine_operator.php';
		var url_header    			= 'index.php?page=operator';

		$("input.chk:checked").each(function(){
			id_array[i]=$(this).val();
			i++;
		})

		if(id_array == null || id_array == ""){
			//alert("Belum ada data yang dipilih untuk dihapus.");
			$('#sukses').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Belum ada data yang dipilih untuk dihapus.'+
											'</div>');
			return false;
		};

		//confirm("Pengguna dengan id ("+id_array+") ini akan dihapus, Lanjutkan?", function(result) {
		var result = confirm("Pengguna dengan id ("+id_array+") ini akan dihapus, Lanjutkan?");

				$('#loading').show();
				if(result == true){
					$.ajax({
						url     : url_proses_hapus,
						data    : 'hapus='+id_array,
						type    : 'POST',
						dataType: 'html',
						success : function(respon){
							if(respon=='ok')
							{
								//hideAll();
								$('#loading').hide();
								viewdata();

								$('#sukses').html('<div class="alert alert-success">'+
																	'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
																	'Berhasil dihapus !'+
																'</div>');
							}else{
								//alert("Gagal Menghapus Data !");
								$('#info').html('<div class="alert alert-danger">'+
																	'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
																	'Gagal Menghapus Data !'+
																'</div>');

							}
						},
					});
				}else{
					//hideAll();
					$('#loading').hide();
				}
		return false;
		//});
	}

	//Mengambil Value melalui URL
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}


	function ubah_profil()
	{
		var fub 		= document.getElementById('file');
		var fileName	= fub.value;
		var ext 		= fileName.substring(fileName.lastIndexOf('.') + 1);

		var id = getParameterByName('id');
		var url_header = 'index.php?page=profile&id='+id;
        var fd = new FormData(document.getElementById("fileinfo"));

		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG")
		{
        fd.append("label", "WEBUPLOAD");
        $.ajax({
              url: "engine/engine_profil.php",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
			  beforeSend: function(){ $("#smButton").val('Sedang Memproses... Tunggu Sebentar...');},
              processData: false,
              contentType: false
				}).done(function( data ) {
					sleep(2000);

					$('#sukses').html('<div class="alert alert-success">'+
														'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
														'Sukses !'+
													'</div>');
					window.location = url_header;
				});
        return false;
		}else{
			//alert("Ekstensi foto tidak di izinkan");
			$('#sukses').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Ekstensi foto tidak di izinkan'+
											'</div>');
				return false;
			};
	}

	function sleep(milliseconds) {
		var start = new Date().getTime();
			for (var i = 0; i < 1e7; i++) {
				if ((new Date().getTime() - start) > milliseconds){
				break;
			}
		}
	}

	$(document).on("click", ".edit-data", function () {
		var id 	 = $(this).data('id');
		var nama = $(this).data('nama');
		var ket  = $(this).data('level');

		$(".modal-body #kodenya").val( id );
		$(".modal-body #namanya").val( nama );
		$(".modal-body #levelnya").val( ket );
	});

    $("#workplace").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $('#loading').fadeIn(800).delay(600).fadeOut();
        var page = $(this).attr("data-page"); //get page number from link
        $("#workplace").load("engine/data/operator.data.php",{"halaman":page}, function(){ //get content from PHP page

        });

    });
