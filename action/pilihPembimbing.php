<?php 
	require_once '../core/Kaprodi.php';

	if (isset($_POST['submit'])) {
		$_SESSION['pembimbing'] = $_POST['pembimbing'];

		if ($kaprodi->pilihPembimbing()) {
			header("Location: ../kaprodi");
		}else {
			die("gagal");
		}
	}
?>