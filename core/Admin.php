<?php 
	require_once 'Database.php';

	class Admin extends Database
	{
		public $nip;
		public $nama;
		
		//set data mahasiswa
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
	}

	$admin = new Admin();

 ?>