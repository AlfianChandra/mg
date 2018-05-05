<?php 
	require_once '../core/Admin.php';
	require_once '../core/File.php';

	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$_SESSION['username'] = $id;
		
		$doc_type = array_keys($_FILES)[0];
		
		if ($admin->adminUploadPengajuan($id)) {
			$file->uploadFile($_FILES['pengajuan'], $doc_type);
		}
	header("Location: ../admin");
	}
 ?>