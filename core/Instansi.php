<?php 
	require_once 'Database.php';

	class Instansi extends Database
	{
		public $username;
		public $nama;
		
		//set data mahasiswa
		function __construct()
		{	
			parent::__construct();
			$username 	= $_SESSION['username'];
			$query 	= "SELECT * FROM instansi WHERE username = '$username'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->username 		= $row->username;
				$this->nama_instansi	= $row->nama_instansi;
				
			}


		}
	}

	$instansi = new Instansi();

 ?>