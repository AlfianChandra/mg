<?php 
	require_once 'Database.php';

	class Instansi extends Database
	{
		
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

		function lihatInstansi()
		{	
			
			$query 	= "SELECT * FROM instansi";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function instansiTerpilih($id)
		{	
			$query 	= "SELECT * FROM instansi WHERE username = '$id'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->username 		= $row->username;
				$this->nama_instansi	= $row->nama_instansi;
				$this->deskripsi		= $row->deskripsi;
				$this->kapasitas		= $row->kapasitas;
				$this->syarat			= $row->syarat;
				$this->kriteria			= $row->kriteria;
				$this->alamat_instansi	= $row->alamat_instansi;		
			}
		}

		function milihInstansi()
		{
			$username	= $_SESSION['username'];
			$id 		= $_SESSION['instansi'];
			
			$query 		= "UPDATE mahasiswa SET tempat_magang ='$id' WHERE nim='$username'";

			$this->conn->query($query);

			$query		= "UPDATE instansi SET pemagang_terdaftar = pemagang_terdaftar + 1 WHERE username ='$id'";

			$this->conn->query($query);
		}

		function statusInstansi()
		{
			$username	= $_SESSION['username'];
			$query = "SELECT * FROM mahasiswa WHERE nim='$username'";

			$result = $this->conn->query($query);
			while ($row = $result->fetch_object()) {
				$this->tempat_magang = $row->tempat_magang;
			}
		}

	}

	$instansi = new Instansi();

 ?>