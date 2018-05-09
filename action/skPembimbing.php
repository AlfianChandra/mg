<?php 
	require_once '../core/Dosen.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {

		$dosen->skPembimbing();
		$_SESSION['file'] = $dosen->nim;
		
		if($dosen->kirimSkPembimbing()){

			$file->uploadFile($_FILES['sk_pembimbing'], "sk_pembimbing_magang");
    		header("Location: ../admin");
		}else{
			die('error!');
		}

	}else {
		die("Ada kesalahan!");
	}
	
?>