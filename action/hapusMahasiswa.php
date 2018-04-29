<?php 
	require_once '../core/Mahasiswa.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if ($mahasiswa->hapusMahasiswa($id)) {
			header("Location: ../admin");
		}else {
			echo "gagal";
		}
	}
?>