<?php 

	require_once '../core/Instansi.php';
	

	if ($_POST) {

		$username 			= $_POST['username'];
		$nama_instansi 		= $_POST['nama_instansi'];
		$password 			= $_POST['password'];
		$password			= md5($password);
		$kapasitas   		= $_POST['kapasitas'];
		$kriteria  			= $_POST['kriteria'];
		$syarat  			= $_POST['syarat'];
		$alamat 			= $_POST['alamat'];
		$deskripsi 			= $_POST['deskripsi'];
		

		if ($instansi->tambahInstansi($username, $nama_instansi, $kapasitas, $kriteria, $syarat, $alamat, $deskripsi, $password)) 
		{
			echo "success";
		}else{
			echo "error";
		}
		
	}

	
 ?>