<?php 
		session_start();
		if (isset($_POST['submit'])) {

			if (isset($_FILES['permohonan'])) {
				$type = "permohonan";
			}elseif (isset($_FILES['pengajuan'])) {
				$type = "pengajuan";
			}elseif (isset($_FILES['krs'])) {
				$type = "krs";
			}elseif (isset($_FILES['khs'])) {
				$type = "khs";
			}elseif (isset($_FILES['transkrip'])) {
				$type = "transkrip";
			}

				$nama 		= $type . $_SESSION['username'] . ".pdf"; 
				$asal 		= $_FILES[$type]['tmp_name']; 
				$error 		= $_FILES[$type]['error'];
				$size		= $_FILES[$type]['size'];
				
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

		header("Location: ../mhs");
 ?>