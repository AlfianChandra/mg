<?php 

	require_once '../core/Mahasiswa.php';
	

	if ($_POST) {
		$nim 			= $_POST['nim'];
		$nama 			= $_POST['nama'];
		$password 		= $_POST['password'];
		$tempat_lahir   = $_POST['tempat_lahir'];
		$tanggal_lahir  = $_POST['tanggal_lahir'];
		$jenis_kelamin  = $_POST['jenis_kelamin'];
		$prodi 			= $_POST['prodi'];
		$fakultas 		= $_POST['fakultas'];
		$sks 			= $_POST['sks'];
		$ipk 			= $_POST['ipk'];
		$telp 			= $_POST['telp'];
		$semester		= $_POST['semester'];
		

		if ($mahasiswa->tambahMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $fakultas, $prodi, $telp, $sks, $ipk, $semester, $password)) 
		{
			echo "success";
		}else{
			echo "error";
		}
		
	}

	
 ?>