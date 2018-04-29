<?php 
		require_once '../core/Instansi.php';
		
		// session_start();

		if (isset($_POST['submit'])) {

			$instansi_id			= $_POST['instansi'];
  			$_SESSION['instansi'] 	= $instansi_id;
  			$tanggal_mulai 			= $_POST['tanggal_mulai'];
  			$tanggal_selesai 		= $_POST['tanggal_selesai'];

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
						echo 'file terlalu besar';
					}

				}else{
					echo 'ada error';
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
						echo 'file terlalu besar';
					}
				}else{
					echo 'ada error';
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
						echo 'file terlalu besar';
					}

				}else{
					echo 'ada error';
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
						echo 'file terlalu besar';
					}

				}else{
					echo 'ada error';
				}
			}
			
		}

		header("Location: ../mhs");
 ?>