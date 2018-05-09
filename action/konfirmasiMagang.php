<?php 
	require_once '../core/Mahasiswa.php';

	if (isset($_POST['submit'])) {
		
		if ($mahasiswa->konfirmasiMagang()) {
			header("Location: ../mhs");		
		}else{
			die("ada masalah");
		}
	
	}else{
		die('ada kesalahan');
	}
 ?>