<?php 
	require_once '../core/Instansi.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {
		
    	$status 				= $_POST['penerimaan'];
    	$id 					= $_POST['nim'];
 		
		if($status == 1){

			if($instansi->terimaPendaftar($id)){	
				
				$file->uploadFileBalasan($_FILES['surat_balasan'], $id);
				header("Location: ../instansi");
			}else{
				
				die("ada kesalahan teheeeee");
			}

		}elseif($status == 2){
			if($instansi->tolakPendaftar($id)){

				$file->uploadFileBalasan($_FILES['surat_balasan'], $id);
				header("Location: ../instansi");
			}else{
				die("ada kesalahan tehe");
			}

		}else {
			die("Ada kesalahan!");
		}
	}
?>