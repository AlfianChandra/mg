<?php 
	require_once '../core/Instansi.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {

		$_SESSION['file'] 	= $_SESSION['id'];
    	$status 			= $_POST['penerimaan'];
    	
		if($status == 1){

			if($instansi->terimaPendaftar()){	
				
				$file->uploadFile($_FILES['surat_balasan'], "surat_balasan");
				header("Location: ../instansi");
			}else{
				
				die("ada kesalahan teheeeee");
			}

		}elseif($status == 2){
			if($instansi->tolakPendaftar()){

				$file->uploadFile($_FILES['surat_balasan'], "surat_balasan");
				header("Location: ../instansi");
			}else{
				die("ada kesalahan tehe");
			}

		}else {
			die("Ada kesalahan!");
		}
	}
?>