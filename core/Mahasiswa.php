<?php 
	require_once 'Database.php';
	require_once 'File.php';

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

			if($result->num_rows == 0){

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
				$this->tempat_magang	= $row->tempat_magang;
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

			if($result->num_rows == 0){

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
				$this->tempat_magang 	= $row->tempat_magang;
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

		}

		function tambahMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $fakultas, $prodi, $telp, $sks, $ipk, $semester, $password)
		{
			$query 	= "INSERT INTO mahasiswa(nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, fakultas, prodi, telp, sks, ipk, semester) VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$fakultas', '$prodi', '$telp', '$sks', '$ipk', '$semester')";

			if($this->conn->query($query) == true){

				$query2 = "INSERT INTO auth(username, password) VALUES ('$nim', '$password')";

				return $this->conn->query($query2);
			}else{
				return false;
			}
		}

		function hapusMahasiswa($id)
		{	
			$query = "DELETE FROM mahasiswa WHERE nim = '$id'";
			if($this->conn->query($query) == true){

				$query2 = "DELETE FROM auth WHERE username = '$id'";
				
				return $this->conn->query($query2);			
			}else{
				return false;
			}
		}

		function editMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $fakultas, $prodi, $telp, $sks, $ipk, $semester)
		{
			$query = "UPDATE mahasiswa SET nim='$nim',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',fakultas='$fakultas',prodi='$prodi',jenis_kelamin='$jenis_kelamin',telp='$telp',sks='$sks',ipk='$ipk',semester='$semester' WHERE nim='$nim'";

			return $this->conn->query($query);

		}

		function lihatMahasiswaMagang()
		{	
			$query 	= "SELECT proses_magang.*, mahasiswa.nama AS nama FROM proses_magang JOIN mahasiswa WHERE mahasiswa.nim = proses_magang.nim AND proses_magang.upload_syarat = 1 AND proses_magang.admin_upload = 0";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function mahasiswaCariMagang($data)
		{	
			$query 	= "SELECT proses_magang.*, mahasiswa.nama AS nama FROM proses_magang JOIN mahasiswa WHERE mahasiswa.nim = proses_magang.nim AND proses_magang.upload_syarat = 1 AND proses_magang.admin_upload = 0 AND proses_magang.nim LIKE '%$data%' OR nama LIKE '%$data%'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}

		}

		function uploadPengajuan()
		{	
			$nim = $_SESSION['username'];

			$query = "UPDATE proses_magang SET status_pengajuan = 1 WHERE nim = '$nim'";

			return $this->conn->query($query);
		}

		function cekStatusMagang()
		{
			$nim 	= $_SESSION['username'];

			$query 	= "SELECT * FROM proses_magang WHERE nim = '$nim'";
			$result = $this->conn->query($query);
			
			while($row = $result->fetch_object())
			{
				$this->nim 					= $row->nim;
				$this->upload_syarat		= $row->upload_syarat;
				$this->admin_upload 		= $row->admin_upload;
				$this->status_pengajuan 	= $row->status_pengajuan;
				$this->accepted 			= $row->accepted;
				$this->konfirmasi_magang 	= $row->konfirmasi_magang;
			}
		}

		function daftarUlangMagang()
		{
			$id = $_SESSION['username'];

			$query = "UPDATE mahasiswa SET tempat_magang = NULL WHERE nim = '$id'";
			if($this->conn->query($query) == true){

				$query2 = "DELETE FROM proses_magang WHERE nim = '$id'";

				return $this->conn->query($query2);
			}else{
				return false;
			}
		}

		function konfirmasiMagang()
		{
			$nim = $_SESSION['username'];

			$query = "UPDATE proses_magang SET konfirmasi_magang = 1 WHERE nim = '$nim'";
			return $this->conn->query($query);
		}

		function konfirmasiList()
		{
			$query 	= "SELECT mahasiswa.*, konfirmasi_magang FROM mahasiswa JOIN proses_magang WHERE mahasiswa.nim = proses_magang.nim AND proses_magang.konfirmasi_magang = 1 AND proses_magang.pilih_pembimbing = 0";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function bimbinganList()
		{
			$nip = $_SESSION['username'];

			$query 	= "SELECT mahasiswa.*, proses_magang.pilih_pembimbing FROM mahasiswa JOIN proses_magang WHERE mahasiswa.nim = proses_magang.nim AND proses_magang.pilih_pembimbing = 1 AND mahasiswa.nip_pembimbing = '$nip'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function bimbinganDetail($id)
		{	

			$query 	= "SELECT mahasiswa.*, instansi.nama_instansi, proses_magang.*  FROM mahasiswa JOIN instansi JOIN proses_magang WHERE mahasiswa.tempat_magang = instansi.username AND mahasiswa.nim = proses_magang.nim AND mahasiswa.nim = '$id'";

			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nim 				= $row->nim;
				$this->nama 			= $row->nama;
				$this->tempat_lahir 	= $row->tempat_lahir;
				$this->tanggal_lahir 	= date_format(date_create($row->tanggal_lahir), "j F Y");
				$this->telp 			= $row->telp;
				$this->jenis_kelamin 	= ($row->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
				$this->nama_instansi 	= $row->nama_instansi;
				$this->tanggal_mulai 	= date_format(date_create($row->tanggal_mulai), "j F Y");
				$this->tanggal_selesai 	= date_format(date_create($row->tanggal_selesai), "j F Y");
			}
		}


	}

	$mahasiswa = new Mahasiswa();

 ?>