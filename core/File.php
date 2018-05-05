<?php 

	class File
	{

		function uploadFile($filetype, $doc_type) 
		{
			$ext 		= pathinfo($filetype['name'],  PATHINFO_EXTENSION);
			$nama 		= $doc_type . "_" . $_SESSION['username'] . "." . $ext;
			
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

		function uploadFileBalasan($filetype, $id) 
		{
			$ext 		= pathinfo($filetype['name'],  PATHINFO_EXTENSION);
			$nama 		= "surat_balasan_" . $id . "." . $ext;
			
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

			return;
	
		}

	}

	$file = new File();

?>