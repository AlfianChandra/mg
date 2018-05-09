<?php 
	require_once '../core/Admin.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {
		$_SESSION['file'] = $_SESSION['nim_pengajuan'];
		
		if ($admin->adminUploadPengajuan()) {
			$file->uploadFile($_FILES['pengajuan'], "pengajuan");
			header("Location: ../admin");
		}
	
	}
 ?>