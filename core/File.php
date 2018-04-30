<?php 

	class File
	{

		function uploadFile($filetype, $doc_type) 
		{
			$nama 		= $doc_type . "_" . $_SESSION['username'] . ".pdf";
			$asal 		= $filetype['tmp_name']; 
			$error 		= $filetype['error'];
			$size		= $filetype['size'];
			

			$namafile 	= '../mhs/file/' . $nama; //tujuan

			if ($error == 0) {
					
				if ($size < 100000000) {				
					move_uploaded_file($asal, $namafile);
				}else{
					echo 'file terlalu besar';
				}

			}else{
				echo 'ada error';
			}
		}

	}

	$file = new File();

?>