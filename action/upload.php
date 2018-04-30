<?php 
	require_once '../core/Instansi.php';
	require_once '../core/File.php';
		
	if (isset($_POST['submit'])) {

		$instansi_id			= $_POST['instansi'];
  		$_SESSION['instansi']           = $instansi_id;
  		$tanggal_mulai 			= $_POST['tanggal_mulai'];
  		$tanggal_selesai 		= $_POST['tanggal_selesai'];

  		$doc_type = array_keys($_FILES)[0];

		if($instansi->milihInstansi($tanggal_mulai, $tanggal_selesai))
		{	
			$file->uploadFile($_FILES['permohonan'], $doc_type);
			$file->uploadFile($_FILES['transkrip'], $doc_type);
			$file->uploadFile($_FILES['khs'], $doc_type);
			$file->uploadFile($_FILES['krs'], $doc_type);		
		}
	}

	header("Location: ../mhs/upload.php");
 ?>

