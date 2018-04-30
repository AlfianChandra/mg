<?php 
	require_once 'Database.php';

	class Admin extends Database
	{

		function __construct()
		{	
			parent::__construct();
			$nip 	= $_SESSION['username'];
			$query 	= "SELECT * FROM admin WHERE nip = '$nip'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nama		= $row->nama;
				
			}
		}

		function adminUploadPengajuan($id)
		{
			$query = "UPDATE proses_magang SET admin_upload = 1 WHERE nim = '$id'";

			return $this->conn->query($query);
		}
	}

	$admin = new Admin();

 ?>