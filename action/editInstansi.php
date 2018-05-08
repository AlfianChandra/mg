<?php 

	require_once '../core/Instansi.php';
	
	if ($_POST) {
		
		$username 			= $_POST['username'];
		$nama_instansi 		= $_POST['nama_instansi'];
		$kapasitas 			= $_POST['kapasitas'];
		$kriteria 			= $_POST['kriteria'];
		$syarat 			= $_POST['syarat'];
		$alamat_instansi 	= $_POST['alamat_instansi'];
		$deskripsi 			= $_POST['deskripsi'];

		if ($instansi->editInstansi($username, $nama_instansi, $kapasitas, $kriteria, $syarat, $alamat_instansi, $deskripsi)) 
		{
			echo "yes";
		}else{
			die("error");
		}

	}

	
 ?>