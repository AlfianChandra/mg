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

			if($result->current_field == 0){
				$query 	= "SELECT *, nip_pembimbing AS nama_pembimbing FROM mahasiswa WHERE nim = '$nim'";
				$result = $this->conn->query($query);
			}
			

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

			if($result->current_field == 0){
				$query 	= "SELECT *, nip_pembimbing AS nama_pembimbing FROM mahasiswa WHERE nim = '$id'";
				$result = $this->conn->query($query);
			}

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

		function tambahMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $fakultas, $prodi, $telp, $sks, $ipk, $semester, $password)
		{
			$query 	= "INSERT INTO mahasiswa(nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, fakultas, prodi, telp, sks, ipk, semester) VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$fakultas', '$prodi', '$telp', '$sks', '$ipk', '$semester')";

			$this->conn->query($query);

			$query = "INSERT INTO auth(username, password) VALUES ('$nim', '$password')";

			return $this->conn->query($query);
		}

		function hapusMahasiswa($id)
		{
			$query = "DELETE FROM mahasiswa WHERE nim = '$id'";
			$this->conn->query($query);

			$query = "DELETE FROM auth WHERE username = '$id'";
			
			return $this->conn->query($query);			
		}

		function editMahasiswa()
		{
			$query = "UPDATE mahasiswa SET nim='$nim',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',fakultas='$fakultas',prodi='$prodi',jenis_kelamin='$jenis_kelamin',telp='$telp',sks='$sks',ipk='$ipk',semester='semester' WHERE nim='$nim'";

			return $this->conn->query($query);

		}

		function magangMahasiswa()
		{

		}
	}

	$mahasiswa = new Mahasiswa();

 ?>