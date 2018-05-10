<?php 
	require_once '../core/Admin.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {
		
		if ($admin->adminUploadPengajuan()) {
			$_SESSION['file'] = $_SESSION['nim_pengajuan'];

			$file->uploadFile($_FILES['pengajuan'], "pengajuan");
			header("Location: ../admin");
		}else{
			die('error euy');
		}
	
	}
 ?>