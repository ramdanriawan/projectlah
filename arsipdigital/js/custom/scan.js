        function scanToJpg() {
            scanner.scan(displayImagesOnPage,
                    {
                        "output_settings": [
                            {
                                "type": "return-base64",
                                "format": "jpg"
                            }
                        ]
                    }
            );
        }
        /** Processes the scan result */
        function displayImagesOnPage(successful, mesg, response) {
            if(!successful) { // On error
                console.error('Failed: ' + mesg);
                return;
            }
            if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User cancelled.
                console.info('User cancelled');
                return;
            }
            var scannedImages = scanner.getScannedImages(response, true, false); // returns an array of ScannedImage
            for(var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
                var scannedImage = scannedImages[i];
                processScannedImage(scannedImage);
            }
        }
        
        /** Images scanned so far. */
        var imagesScanned = [];
        /** Processes a ScannedImage */
        function processScannedImage(scannedImage) {
            imagesScanned.push(scannedImage);
            var elementImg = scanner.createDomElementFromModel( {
                'name': 'img',
                'attributes': {
                    'class': 'scanned',
                    'src': scannedImage.src
                }
            });
            document.getElementById('images').appendChild(elementImg);
            upload(scannedImage.src);
            // document.getElementById('alamat').attr('value', elementImg);
        }


    function upload(src)
    {
        var nama        = $('#kode').val();
        var alamat      = src;
        var url_header  = 'index.php?page=scan';

        if(nama == ""){
            bootbox.alert("Data Harus diisi");
            return false;
        };
        
        var url_proses      = 'engine/engine_scan.php';
        
        $.ajax({
            url     : url_proses,
            data    : 'nama='+nama+'&alamat='+alamat, 
            type    : 'POST',
            dataType: 'html',
            success : function(pesan){
                if(pesan=='ok'){
                    $('#edit').modal('hide');
                    window.location.assign(url_header);
                }
                else{
                    bootbox.alert("Pengiriman data gagal !");
                }
            },
        });
    }
    