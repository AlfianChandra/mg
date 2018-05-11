<?php 

	require_once '../core/Mahasiswa.php';
	

	if ($_POST) {

		$nama 			= $_POST['nama'];
		
		$tempat_lahir   = $_POST['tempat_lahir'];
		$tanggal_lahir  = $_POST['tanggal_lahir'];
		$jenis_kelamin  = $_POST['jenis_kelamin'];
		$prodi 			= $_POST['prodi'];
		$fakultas 		= $_POST['fakultas'];
		$sks 			= $_POST['sks'];
		$ipk 			= $_POST['ipk'];
		$telp 			= $_POST['telp'];
		$semester		= $_POST['semester'];
		

		if ($mahasiswa->editMahasiswa($nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $fakultas, $prodi, $telp, $sks, $ipk, $semester)) 
		{
			echo "yes";
		}else{
			echo "error";
		}
		

	}

	
 ?>