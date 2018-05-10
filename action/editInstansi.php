<?php 

	require_once '../core/Instansi.php';
	
	if ($_POST) {
		
		
		$nama_instansi 		= $_POST['nama_instansi'];
		$kapasitas 			= $_POST['kapasitas'];
		$kriteria 			= $_POST['kriteria'];
		$syarat 			= $_POST['syarat'];
		$alamat_instansi 	= $_POST['alamat'];
		$deskripsi 			= $_POST['deskripsi'];

		if ($instansi->editInstansi($nama_instansi, $kapasitas, $kriteria, $syarat, $alamat_instansi, $deskripsi)) 
		{
			header("Location: ../admin");
		}else{
			die("error");
		}

	}

	
 ?>