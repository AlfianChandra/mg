<?php 
	require_once 'Database.php';

	class Kaprodi extends Database
	{

		function __construct()
		{	
			parent::__construct();
			$nip 	= $_SESSION['username'];
			$query 	= "SELECT * FROM ka_prodi WHERE nip = '$nip'";

			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nama		= $row->nama;
				$this->prodi 	= $row->prodi;
			}

		}

		function pilihPembimbing()
		{
			$pembimbing = $_SESSION['pembimbing'];
			$nim 		= $_SESSION['nim'];

			$query = "UPDATE mahasiswa SET nip_pembimbing = '$pembimbing' WHERE nim = '$nim'";

			if($this->conn->query($query)){
				$query2 = "UPDATE proses_magang SET pilih_pembimbing = 1 WHERE nim = '$nim'";
				return $this->conn->query($query2);
			}else{
				return false;
			}
		}
			
	}

	$kaprodi = new Kaprodi();

 ?>