
function tampil_form()
	{
		var urlform = 'includes/form-proses.php';
		var urlformaktalahir = 'includes/form-akta-lahir.php';
		var urlformaktakawin = 'includes/form-akta-kawin.php';
		var urlformaktamati = 'includes/form-akta-mati.php';
		var urlformaktaanaksah = 'includes/form-akta-anaksah.php';

		var layanan = $('#kategori').val();
		var nik	    = $('#nik').val();
		var nama	= $('#namapemohon').val();
		var alamat	= $('#alamat').val();
		var telp	= $('#telp').val();

		if(layanan == 0){
			//bootbox.alert("Kategori Layanan Belum dipilih");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Kategori Layanan Belum dipilih'+
											'</div>');
			return false;
		};

		if(nik == 0 || nik == ""){
			//bootbox.alert("NIK Harus Diisi !");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'NIK Harus Diisi !'+
											'</div>');
			return false;
		};
		if(layanan == 103 ){
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(urlformaktalahir,{"layanan":layanan,"nik":nik}, function(responseTxt, statusTxt, xhr){
			$('#pemohon').val(nik);
			$('#nmpemohon').val(nama);
			$('#almpemohon').val(alamat);
			$('#telppemohon').val(telp);
			if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
		}).fadeIn(1000);
		} else if (layanan == 104 ) {
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(urlformaktakawin,{"layanan":layanan,"nik":nik}, function(responseTxt, statusTxt, xhr){
			$('#pemohon').val(nik);
			$('#nmpemohon').val(nama);
			$('#almpemohon').val(alamat);
			$('#telppemohon').val(telp);
			if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
		}).fadeIn(1000);
		}else if (layanan == 105 ) {
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(urlformaktamati,{"layanan":layanan,"nik":nik}, function(responseTxt, statusTxt, xhr){
			$('#pemohon').val(nik);
			$('#nmpemohon').val(nama);
			$('#almpemohon').val(alamat);
			$('#telppemohon').val(telp);
			if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
		}).fadeIn(1000);
		} else if (layanan == 106 ) {
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(urlformaktaanaksah,{"layanan":layanan,"nik":nik}, function(responseTxt, statusTxt, xhr){
			$('#pemohon').val(nik);
			$('#nmpemohon').val(nama);
			$('#almpemohon').val(alamat);
			$('#telppemohon').val(telp);
			if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
		}).fadeIn(1000);
		} else {
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(urlform,{"layanan":layanan,"nik":nik}, function(responseTxt, statusTxt, xhr){
			$('#pemohon').val(nik);
			$('#nmpemohon').val(nama);
			$('#almpemohon').val(alamat);
			$('#telppemohon').val(telp);
			if(statusTxt == "error")
				//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
				$('#info').html('<div class="alert alert-warning">'+
													'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
													'Error: ' + xhr.status + ': ' + xhr.statusText +
												'</div>');
		}).fadeIn(1000);
		};
	}

function awal()
	{
		var formawal = 'includes/form-awal.php';
		$('#loading').fadeIn(800).delay(600).fadeOut();
		$("#form-proses").load(formawal).fadeIn(1000);
	}

function tampil_syarat()
	{
		var nik 	= $('#nik').val();
		var sub 	= $('#subkategori').val();
		var tgl		= $('#tgl_estimasi').val();
		var anak	= $('#anakketermohon').val();

		var urlform = 'includes/form-syarat.php';

		if(nik == 0){
			//bootbox.alert("NIK masih kosong");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'NIK masih kosong' +
											'</div>');
			return false;
		};

		if(anak == ""){
			//bootbox.alert("Form Anak Ke- Belum Di isi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Form Anak Ke- Belum Di isi' +
											'</div>');
			return false;
		};

		if(tgl == ""){
			//bootbox.alert("Tanggal Estimasi Belum Di isi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Tanggal Estimasi Belum Di isi' +
											'</div>');
			return false;
		};


		$('#loading').show();
		$("#form-syarat").load(urlform,{"subkategori":sub}, function(responseTxt, statusTxt, xhr){
			if(statusTxt == "error")
			//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Error: ' + xhr.status + ': ' + xhr.statusText +
											'</div>');
		});
		$('#loading').hide();

	}

function get_pemohon()
	{
		var nik 	= $('#nik').val();
		var urlform = 'includes/get_pemohon.php';

		if(nik == 0){
			//bootbox.alert("NIK masih kosong");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'NIK masih kosong' +
											'</div>');
			return false;
		};

		$("#form-pemohon").load(urlform,{"nik":nik}, function(responseTxt, statusTxt, xhr){
			if(statusTxt == "error")
			//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Error: ' + xhr.status + ': ' + xhr.statusText +
											'</div>');
		}).hide().fadeIn(1000);
	}

function get_nama()
	{
		var nik 		= $('#nik_regis').val();
		var urlform     = 'includes/get_nama.php';
        var layanan     = $('#kategori').val();

		if(nik == 0){
			//bootbox.alert("NIK masih kosong");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'NIK masih kosong' +
											'</div>');
			return false;
		};

		$("#form-nama").load(urlform,{"nik":nik,"layanan":layanan}, function(responseTxt, statusTxt, xhr){
			if(statusTxt == "error")
			//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Error: ' + xhr.status + ': ' + xhr.statusText +
											'</div>');
		}).hide().fadeIn(1000);
	}

function get_pasangan()
	{
		var nik 	= $('#nik_pasangan').val();
		var urlform = 'includes/get_keluarga.php';

		if(nik == 0){
			//bootbox.alert("NIK masih kosong");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'NIK masih kosong' +
											'</div>');
			return false;
		};

		$("#form-pasangan").load(urlform,{"nik":nik}, function(responseTxt, statusTxt, xhr){
			if(statusTxt == "error")
			//bootbox.alert("Error: " + xhr.status + ": " + xhr.statusText);
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Error: ' + xhr.status + ': ' + xhr.statusText +
											'</div>');
		}).hide().fadeIn(1000);
	}

function popup_print()
	{
		var idproses	    = $('#kode').val();
		var nik			    = $('#pemohon').val();
		var namapemohon		= $('#nmpemohon').val();
		var kategori	    = $('#kategori').val();
		var subkategori	    = $('#subkategori').val();
		var tgl				= $('#tgl_estimasi').val();
		var nmibu			= $('#ibutermohon').val();
		var tltermohon		= $('#tltermohon').val();
		var tgaltermohon	= $('#tgltermohon').val();
		var anak			= $('#anakketermohon').val();
		var nmtermohon		= $('#nmtermohon').val();
		var nikpasangan		= $('#nikpasangan').val();
		var namapasangan	= $('#namapasangan').val();
		var nikt			= $('#nik_regis').val();
		var agama			= $('#agamatermohon').val();

		if(kategori == "101" || kategori == "102"){
			window.open('includes/print_proses.php?id_proses='+idproses+'&id_kategori='+kategori+'&id_sub_kategori='+subkategori+'&nik='+nik+'&tgl_estimasi='+tgl+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');
		}else if(kategori=="103") {
			window.open('includes/print_akta.php?id_proses='+idproses+'&namaibu='+nmibu+'&tgltermohon='+tgaltermohon+'&tmpltermohon='+tltermohon+'&nmpemohon='+namapemohon+'&nmtermohon='+nmtermohon+'&anaktermohon='+anak+'&id_kategori='+kategori+'&id_sub_kategori='+subkategori+'&nik='+nik+'&tgl_estimasi='+tgl+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');
		}else{
			window.open('includes/print_all.php?id_proses='+idproses+'&namaibu='+nmibu+'&nikpasangan='+nikpasangan+'&namapasangan='+namapasangan+'&tgltermohon='+tgaltermohon+'&tmpltermohon='+tltermohon+'&nmpemohon='+namapemohon+'&nikt='+nikt+'&nmtermohon='+nmtermohon+'&agama='+agama+'&anaktermohon='+anak+'&id_kategori='+kategori+'&id_sub_kategori='+subkategori+'&nik='+nik+'&tgl_estimasi='+tgl+'','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');
			};
	}

function proses_layanan()
	{
		var jumlah 	= $('#jumlah').val();
		id_array	= new Array()
		i=0;
		$("input.chk:checked").each(function(){
			id_array[i]=$(this).val();
			i++;
		})

		if(id_array == null || id_array == ""){
			//bootbox.alert("Minimal 1 syarat harus terpenuhi");
			$('#info').html('<div class="alert alert-warning">'+
												'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
												'Minimal 1 syarat harus terpenuhi' +
											'</div>');
			return false;
		};


		var url_proses    	= 'engine/engine_proses.php';
		var url_header    	= 'index.php?page=arsip';
		var pemohon			= $('#pemohon').val();
		var idproses	    = $('#kode').val();
		var nik			    = $('#nik_regis').val();
		var nama		    = $('#nmpemohon').val();
		var alamat		    = $('#almpemohon').val();
		var telp		    = $('#telppemohon').val();
		var kategori	    = $('#kategori').val();
		var subkategori	    = $('#subkategori').val();
		var tgl				= $('#tgl_estimasi').val();
		var anak			= $('#anakketermohon').val();
		var agamatermohon	= $('#agamatermohon').val();
		var nikpasangan		= $('#nik_pasangan').val();
		var namapasangan	= $('#namapasangan').val();


		if(id_array.length != jumlah){

			var status	    = "Belum Lengkap";

			//bootbox.confirm("Persyaratan belum lengkap, Lanjutkan Proses Penyimpanan ?", function(result) {
			var result = confirm("Persyaratan belum lengkap, Lanjutkan Proses Penyimpanan ?");
			if(result == true){

					$.ajax({
						url     : url_proses,
						data    : 'simpan='+idproses+'&nik='+nik+'&kategori='+kategori+'&subkategori='+subkategori+'&id='+idproses+'&status='+status+'&tgl='+tgl+'&pemohon='+pemohon+'&nama='+nama+'&alamat='+alamat+'&telp='+telp+'&anak='+anak+'&nikpasangan='+nikpasangan+'&namapasangan='+namapasangan+'&agamatermohon='+agamatermohon,
						type    : 'POST',
						dataType: 'html',
						success : function(pesan){
							if(pesan=='ok'){
									//bootbox.hideAll();
									window.location = url_header;
								}
							else{
								//bootbox.alert(pesan);
								$('#info').html('<div class="alert alert-warning">'+
																	'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
																	 pesan +
																'</div>');
							}
						}
					});
				}else{
					//bootbox.hideAll();
				}
			//});

		}else{

			var status	    = "Lengkap";

			$.ajax({
				url     : url_proses,
				data    : 'simpan='+idproses+'&nik='+nik+'&kategori='+kategori+'&subkategori='+subkategori+'&id='+idproses+'&status='+status+'&tgl='+tgl+'&pemohon='+pemohon+'&nama='+nama+'&alamat='+alamat+'&telp='+telp+'&anak='+anak,
				type    : 'POST',
				dataType: 'html',
				success : function(pesan){
					if(pesan=='ok'){
							window.location = url_header;
						}
					else{
							//bootbox.alert(pesan);
							$('#info').html('<div class="alert alert-warning">'+
																'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
																 pesan +
															'</div>');
					}
				}
			});
		}
	}


var formawal = 'includes/form-awal.php';
$("#form-proses").load(formawal).fadeIn(1000);
