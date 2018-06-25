<?php
		
		if($_GET["filepath"]!="" && $_GET["filename"]!="") {

				$file_name = $_GET["filename"];
				$file_location = "../../../uploadfile/resources/".$_GET["filepath"];

				if($file_name!="") {	

					$arr = explode(".", $file_location);
					$extension = end($arr);

					if (file_exists($file_location)) {
						header('Content-Description: File Transfer');
						header('Content-Type: application/octet-stream');
						header('Content-Disposition: attachment; filename='.basename($file_name).".".$extension);
						header('Content-Transfer-Encoding: binary');
						header('Expires: 0');
						header('Cache-Control: must-revalidate');
						header('Pragma: public');
						header('Content-Length: ' . filesize($file_location));
						ob_clean();
						flush();
						readfile($file_location);
						exit();

					} else {
						alert("ไม่มีเอกสาร","");
						exit();
					}

			} else {
				alert("ข้อมูลไม่ครบ","");
				exit();
			}
	} else {
		alert("ข้อมูลไม่ครบ","");
		exit();
	}
?>