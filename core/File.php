<?php 

	class File
	{

		function uploadFile($filetype, $doc_type) 
		{
			// $ext 		= pathinfo($filetype['name'],  PATHINFO_EXTENSION);
			$nama 		= $doc_type . "_" . $_SESSION['username']. ".pdf";
			
			$asal 		= $filetype['tmp_name']; 
			$error 		= $filetype['error'];
			$size		= $filetype['size'];
			

			$namafile 	= '../mhs/file/' . $nama; //tujuan
			
			if ($error == 0) {
					
				if ($size < 100000000) {				
					move_uploaded_file($asal, $namafile);
				}else{
					die("Ukuran file terlalu besar");
				}

			}else{
				die("Terjadi kesalahan");
			}
		}

	}

	$file = new File();

?>