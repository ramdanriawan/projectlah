function check_login()
{
   
    var username = $('#userid').val();
    var password = $('#password').val();
    
    var url_login    = 'includes/cek.php';
    var url_admin    = location.protocol+'/arsipdigital/';
     
   
    $('#info').html("<div class='alert alert-info' align='center'>Silahkan Tunggu...</div>");

    $.ajax({
        url     : url_login,
        data    : 'userid='+username+'&password='+password, 
        type    : 'POST',
        dataType: 'html',
        success : function(pesan){
            if(pesan=='ok'){
				$('#info').html("<div class='alert alert-success' align='center'>Pengiriman pesan berhasil</div>");
                window.location = url_admin;
            }
            else{
              
				$('#info').html("<div class='alert alert-error' align='center'>UserID dan Password Tidak Cocok</div>");
				
            }
        },
    });
}