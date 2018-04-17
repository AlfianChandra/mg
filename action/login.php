<?php 

	require_once '../core/Auth.php';

	$auth->login($_POST['username'], $_POST['pass']);

 ?>