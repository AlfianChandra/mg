<?php 
	require_once '../core/Mahasiswa.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {

		$doc_type = array_keys($_FILES);

		if($mahasiswa->uploadPengajuan()){

			if($_FILES['proposal']['name'] !== ""){
				
				$file->uploadFile($_FILES['proposal'], $doc_type[0]);

				if($_FILES['cv']['name'] !== ""){

					$file->uploadFile($_FILES['cv'], $doc_type[1]);	
					header("Location: ../mhs");	
				}else{

					header("Location: ../mhs");			
				}

			}elseif($_FILES['cv']['name'] !== ""){
 
				$file->uploadFile($_FILES['cv'], $doc_type[1]);
				header("Location: ../mhs");		
			}else{
				header("Location: ../mhs");		
			}
		}


	}else{
		die("ada kesalahan!");
	}

	
	
 ?>