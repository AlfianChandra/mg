<?php 
	require_once '../core/Mahasiswa.php';

	if (isset($_POST['submit'])) {

		$id = $_SESSION['username'];
		
		if ($mahasiswa->daftarUlangMagang($id)) {
			header("Location: ../mhs/upload.php");
		}else {
			die("gagal");
		}
	}
?>