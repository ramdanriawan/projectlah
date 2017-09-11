<?php
include "../includes/config.php";
if(isset($_POST['hapus'])) {
	$id	 = $_POST['hapus'];
	$nilai = explode(',',$id);
    foreach($nilai as $value) {		
       $first_sub = '../php/files/'.$value;        
        if(is_dir($first_sub)){
            $read_sub1 = opendir($first_sub);
            while(false !== ($files = readdir($read_sub1))){
                if($files!="." && $files!=".."){
                    unlink($first_sub ."/". $files);
                }
            }
			rmdir($first_sub);
            closedir($read_sub1);
		}
		
		$sql=$conn->query("DELETE FROM ad_proses WHERE id_proses = '$value'");
	}
	if($sql){
		echo "ok";
	}else{
		echo $conn->error;
	}
}
?>