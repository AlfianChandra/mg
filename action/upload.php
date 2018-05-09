<?php 
	require_once '../core/Instansi.php';
	require_once '../core/File.php';
	require_once '../core/Mahasiswa.php';
		
	if (isset($_POST['submit'])) {


		$instansi_id			= $_POST['instansi'];
  		$_SESSION['instansi']   = $instansi_id;
  		$_SESSION['file']		= $mahasiswa->nim;
  	
  		$tanggal_mulai 			= $_POST['tanggal_mulai'];
  		$tanggal_selesai 		= $_POST['tanggal_selesai'];

  		$doc_type = array_keys($_FILES);

		if($instansi->milihInstansi($tanggal_mulai, $tanggal_selesai))
		{	
			$file->uploadFile($_FILES['permohonan'], $doc_type[0]);
			$file->uploadFile($_FILES['transkrip'], $doc_type[1]);
			$file->uploadFile($_FILES['khs'], $doc_type[2]);
			$file->uploadFile($_FILES['krs'], $doc_type[3]);

			header("Location: ../mhs/upload.php");		
		}
	}else{
		die("Ada error!");
	}

	
 ?>

