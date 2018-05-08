<?php 

	require_once '../core/Dosen.php';
	
	if ($_POST) {
		
		$nama 			= $_POST['nama'];
		$prodi 			= $_POST['prodi'];
		$telp 			= $_POST['telp'];

		if ($dosen->editDosen($nama, $prodi, $telp)) 
		{
			echo "yes";
		}else{
			die("error");
		}

	}

	
 ?>