<?php 
	
	session_start();
	$nim = $_SESSION['username'] . ".pdf";

	header("Location: ../mhs/file/".$_GET['type'].$nim);
	
 ?>