<?php 
	require_once '../core/Instansi.php';

	if ($_POST) {
		
		if ($instansi->hapusInstansi()) {
			echo "yes";
		}else {
			die("gagal");
		}
	}
?>