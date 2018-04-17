<?php 
	require_once 'Database.php';

	class Dosen extends Database
	{
		public $nip;
		public $nama;
		
		//set data mahasiswa
		function __construct()
		{	
			parent::__construct();
			$nip 	= $_SESSION['username'];
			$query 	= "SELECT * FROM dosen WHERE nip = '$nip'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nama		= $row->nama;
				
			}


		}
	}

	$dosen = new Dosen();

 ?>