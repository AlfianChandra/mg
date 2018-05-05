<?php 
	require_once '../core/Mahasiswa.php';

	if ($_POST) {
		$id = $_POST['id'];
		if ($mahasiswa->hapusMahasiswa($id)) {
			echo "yes";
		}else {
			die("gagal");
		}
	}
?>