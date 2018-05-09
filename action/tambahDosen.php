<?php 

	require_once '../core/Dosen.php';
	
	if ($_POST) {

		$nip 			= $_POST['nip'];
		$nama 			= $_POST['nama'];
		$password 		= $_POST['password'];
		$prodi 			= $_POST['prodi'];
		$telp 			= $_POST['telp'];
		$role 			= $_POST['jabatan'];
		
		if ($dosen->tambahDosen($nip, $nama, $prodi, $telp, $password, $role)) 
		{
			echo "success";
		}else{
			die("error");
		}
		
	}

	
 ?>