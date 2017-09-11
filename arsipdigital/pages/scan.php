		<div class="breadLine">
            <ul class="breadcrumb">
                <li><a href="#">Aplikasi Arsip Digital</a> <span class="divider">></span></li>                
                <li class="active">Scan File Arsip</li>
            </ul>
        </div>
		<div class="workplace">
			
			<div class="row-fluid">
                
                <div class="span12">
                    <div class="head clearfix">
                        <div class="isw-documents"></div>
                        <h1>Scan dokumen</h1>
                    </div>
                    <div class="block-fluid">                        
						<div class="block">
							<input type="button" onclick="scanToJpg();" id="smButton" class="btn btn-warning" value="Scan">
						</div>
						<div class="block">
							<input type="text" id="nama">
							<input type="text" id="alamat" name="alamat" disabled="">
							<input type="button" onclick="upload();" id="smButton" class="btn btn-primary" value="Upload">
						</div>
                        <div class="row-form clearfix">
							<div id="images"></div>
                        </div>
                	</div>
				</div>
			</div>			
		</div>
		<div class="dr"><span></span></div>

		<script type="text/javascript" src="js/custom/scan.js"></script>
		<script src="js/scannerjs/scanner.js" type="text/javascript"></script>



