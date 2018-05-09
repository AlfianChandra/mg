<?php 
	require_once '../core/Dosen.php';

	if ($_POST) {
		$id = $_POST['id'];
		if ($dosen->hapusDosen()) {
			echo "yes";
		}else {
			die("gagal");
		}
	}
?>