<?php 
	require_once '../core/Mahasiswa.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {
		$mahasiswa->uploadPengajuan();
	}
	
	header("Location: ../mhs");
 ?>