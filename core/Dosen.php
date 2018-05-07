<?php 
	require_once 'Database.php';

	class Dosen extends Database
	{
		
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
				$this->prodi	= $row->prodi;
				$this->telp 	= $row->telp;
			}

		}

		function lihatDosenPembimbing()
		{	
			$prodi 	= $_SESSION['prodi'];
			$query 	= "SELECT * FROM dosen WHERE prodi = '$prodi'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function lihatKontakPembimbing()
		{
			$nim = $_SESSION['username'];
			
			$query 	= "SELECT dosen.*, mahasiswa.nip_pembimbing FROM dosen JOIN mahasiswa WHERE mahasiswa.nip_pembimbing = dosen.nip AND mahasiswa.nim = '$nim'";

			$result = $this->conn->query($query);
			
			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nama		= $row->nama;
				$this->prodi	= $row->prodi;
				$this->telp 	= $row->telp;
			}	
		}
	}

	$dosen = new Dosen();

 ?>