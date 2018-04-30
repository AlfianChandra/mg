<?php 
		require_once '../core/Instansi.php';
		require_once '../core/File.php';
		
		if (isset($_POST['submit'])) {

			$instansi_id			= $_POST['instansi'];
  			$_SESSION['instansi']           = $instansi_id;
  			$tanggal_mulai 			= $_POST['tanggal_mulai'];
  			$tanggal_selesai 		= $_POST['tanggal_selesai'];

<<<<<<< HEAD
  			$doc_type = array_keys($_FILES)[0];

			if($instansi->milihInstansi($tanggal_mulai, $tanggal_selesai))
			{	
				$file->uploadFile($_FILES['permohonan'], $doc_type);
				$file->uploadFile($_FILES['transkrip'], $doc_type);
				$file->uploadFile($_FILES['khs'], $doc_type);
				$file->uploadFile($_FILES['krs'], $doc_type);
=======
			if($instansi->milihInstansi($tanggal_mulai, $tanggal_selesai))
			{

				$nama 		= "permohonan" . $_SESSION['username'] . ".pdf";
				$asal 		= $_FILES["permohonan"]['tmp_name']; 
				$error 		= $_FILES["permohonan"]['error'];
				$size		= $_FILES["permohonan"]['size'];
					
				$namafile 	= '../mhs/file/' . $nama; //tujuan
			
				if ($error == 0) {
					
					if ($size < 100000000) {				
						move_uploaded_file($asal, $namafile);
					}else{
						echo 'size';
					}

				}else{
					echo 'error';
				}

				$nama 		= "transkrip" . $_SESSION['username'] . ".pdf";
				$asal 		= $_FILES["transkrip"]['tmp_name']; 
				$error 		= $_FILES["transkrip"]['error'];
				$size		= $_FILES["transkrip"]['size'];
					
				$namafile 	= '../mhs/file/' . $nama; //tujuan
			

				if ($error == 0) {
						
					if ($size < 100000000) {				
						move_uploaded_file($asal, $namafile);
					}else{
						echo 'size';
					}
				}else{
					echo 'error';
				}

				$nama 		= "khs" . $_SESSION['username'] . ".pdf";
				$asal 		= $_FILES["khs"]['tmp_name']; 
				$error 		= $_FILES["khs"]['error'];
				$size		= $_FILES["khs"]['size'];
					
				$namafile 	= '../mhs/file/' . $nama; //tujuan
			
				if ($error == 0) {
					
					if ($size < 100000000) {				
						move_uploaded_file($asal, $namafile);
					}else{
						echo 'size';
					}

				}else{
					echo 'error';
				}

				$nama 		= "krs" . $_SESSION['username'] . ".pdf";
				$asal 		= $_FILES["krs"]['tmp_name']; 
				$error 		= $_FILES["krs"]['error'];
				$size		= $_FILES["krs"]['size'];
					
				$namafile 	= '../mhs/file/' . $nama; //tujuan
			
				if ($error == 0) {
					
					if ($size < 100000000) {				
						move_uploaded_file($asal, $namafile);
					}else{
						echo 'size';
					}

				}else{
					echo 'error';
				}
>>>>>>> 815d5edecfee20f34c39d84e3738cca4ce04a8c5
			}
		}

<<<<<<< HEAD
		header("Location: ../mhs");
?>
=======
		header("Location: ../mhs/upload.php");
 ?>
>>>>>>> 815d5edecfee20f34c39d84e3738cca4ce04a8c5
