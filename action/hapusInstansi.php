<?php 
	require_once '../core/Instansi.php';

	if ($_POST) {
		$id = $_POST['id'];
		if ($instansi->hapusInstansi($id)) {
			echo "yes";
		}else {
			die("gagal");
		}
	}
?>