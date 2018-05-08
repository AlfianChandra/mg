<?php 
	require_once '../core/Dosen.php';

	if (isset($_POST['submit'])) {
		$_SESSION['pembimbing'] = $_POST['pembimbing'];

		if ($dosen->pilihPembimbing()) {
			header("Location: ../kaprodi");
		}else {
			die("gagal");
		}
	}
?>