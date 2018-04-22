<?php 
	require_once 'Database.php';

	class Mahasiswa extends Database
	{
		
		//set data mahasiswa
		function __construct()
		{	
			//memasukkan construct parent class juga
			parent::__construct();
			
			$nim = $_SESSION['username'];
			$query 	= "SELECT dosen.nama AS nama_pembimbing, mahasiswa.* FROM mahasiswa JOIN dosen WHERE dosen.nip = mahasiswa.nip_pembimbing AND mahasiswa.nim = '$nim'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nim 				= $row->nim;
				$this->nama 			= $row->nama;
				$this->tempat_lahir 	= $row->tempat_lahir;
				$this->tanggal_lahir 	= date_format(date_create($row->tanggal_lahir), "j F Y");
				$this->fakultas 		= $row->fakultas;
				$this->prodi 			= $row->prodi;
				$this->telp 			= $row->telp;
				$this->jenis_kelamin 	= ($row->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
				$this->nama_pembimbing	= $row->nama_pembimbing;
				$this->sks 				= $row->sks;
				$this->ipk 				= $row->ipk;
				$this->semester 		= $row->semester;
			}
		}


		function lihatMahasiswa()
		{	
			
			$query 	= "SELECT * FROM mahasiswa";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function mahasiswaTerpilih($id)
		{	
			$query 	= "SELECT dosen.nama AS nama_pembimbing, mahasiswa.* FROM mahasiswa JOIN dosen WHERE dosen.nip = mahasiswa.nip_pembimbing AND mahasiswa.nim = '$id'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nim 				= $row->nim;
				$this->nama 			= $row->nama;
				$this->tempat_lahir 	= $row->tempat_lahir;
				$this->tanggal_lahir 	= date_format(date_create($row->tanggal_lahir), "j F Y");
				$this->fakultas 		= $row->fakultas;
				$this->prodi 			= $row->prodi;
				$this->telp 			= $row->telp;
				$this->jenis_kelamin 	= ($row->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
				$this->nama_pembimbing	= $row->nama_pembimbing;
				$this->sks 				= $row->sks;
				$this->ipk 				= $row->ipk;
				$this->semester 		= $row->semester;
			}
		}

		function mahasiswaCari($data)
		{	
			$query 	= "SELECT * FROM mahasiswa WHERE nim LIKE '%$data%' OR nama LIKE '%$data%'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}

			$this->rows = mysqli_num_rows($result);
		}
	}

	$mahasiswa = new Mahasiswa();

 ?>