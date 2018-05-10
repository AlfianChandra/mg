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
				$this->kapasitas	 	= $row->kapasitas;
				$this->deskripsi 		= $row->deskripsi;
				$this->syarat 			= $row->syarat;
				$this->kriteria			= $row->kriteria;
				$this->alamat_instansi	= $row->alamat_instansi;
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

		function milihInstansi($tanggal_mulai, $tanggal_selesai)
		{
			$username		= $_SESSION['username'];
			$instansi_id	= $_SESSION['instansi'];
					
			$query 	= "UPDATE mahasiswa SET tempat_magang ='$instansi_id' WHERE nim='$username'";

			if($this->conn->query($query) == true){

				$query2	= "UPDATE instansi SET pemagang_terdaftar = pemagang_terdaftar + 1 WHERE username ='$instansi_id'";

				if($this->conn->query($query2) == true){

					$query3 = "INSERT INTO proses_magang(nim, instansi, tanggal_mulai, tanggal_selesai, upload_syarat) VALUES ('$username', '$instansi_id', '$tanggal_mulai', '$tanggal_selesai', 1)";
					
					return $this->conn->query($query3);
				}else{
					return false;
				}
			}else{
				return false;
			}
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

		function lihatPendaftar()
		{
			$username = $_SESSION['username'];

			$query = "SELECT mahasiswa.*, proses_magang.status_pengajuan FROM mahasiswa JOIN proses_magang WHERE mahasiswa.nim = proses_magang.nim AND mahasiswa.tempat_magang='$username' AND proses_magang.status_pengajuan = 1 AND proses_magang.accepted = 0";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}

		}

		function pendaftarCari($data)
		{
			$username = $_SESSION['username'];

			$query 	= "SELECT mahasiswa.*, proses_magang.status_pengajuan FROM mahasiswa JOIN proses_magang WHERE mahasiswa.nim = proses_magang.nim AND mahasiswa.tempat_magang='$username' AND proses_magang.status_pengajuan = 1 AND proses_magang.accepted = 0 AND mahasiswa.nim LIKE '%$data%' OR mahasiswa.nama LIKE '%$data%' AND tempat_magang = '$username'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function tambahInstansi($username, $nama_instansi, $kapasitas, $kriteria, $syarat, $alamat, $deskripsi, $password)
		{
			$query = "INSERT INTO instansi(username, nama_instansi, kapasitas, deskripsi, syarat, kriteria, alamat_instansi) VALUES ('$username', '$nama_instansi', '$kapasitas', '$deskripsi', '$syarat', '$kriteria', '$alamat')";
			if($this->conn->query($query) == true){

				$query = "INSERT INTO auth(username, password, role) VALUES ('$username', '$password', '3')";

				return $this->conn->query($query);
			}else{
				return false;
			}
		}

		function hapusInstansi()
		{	
			$id 	= $_SESSION['instansi'];

			$query 	= "DELETE FROM instansi WHERE username = '$id'";
			if($this->conn->query($query) == true){

				$query2 = "DELETE FROM auth WHERE username = '$id'";
				
				return $this->conn->query($query2);			
			}else{
				return false;
			}
		}

		function editInstansi($nama_instansi, $kapasitas, $kriteria, $syarat, $alamat_instansi, $deskripsi)
		{
			$username = $_SESSION['instansi_username'];
			$query = "UPDATE instansi SET nama_instansi='$nama_instansi',kapasitas='$kapasitas',deskripsi='$deskripsi',syarat='$syarat',kriteria='$kriteria',alamat_instansi='$alamat_instansi' WHERE username = '$username'";
			return $this->conn->query($query);
		}

		function terimaPendaftar()
		{	
			$id 		= $_SESSION['file'];
			$username 	= $_SESSION['username'];

			$query = "UPDATE proses_magang SET accepted = 1 WHERE nim = '$id'";

			if ($this->conn->query($query) == true){
			
				$query2 = "UPDATE instansi SET pemagang_diterima = pemagang_diterima + 1, pemagang_terdaftar = pemagang_terdaftar - 1 WHERE username = '$username'";
			
				return $this->conn->query($query2);
			}else{
				return false;
			}
				
		}

		function tolakPendaftar()
		{
			$id 		= $_SESSION['file'];
			$username 	= $_SESSION['username'];

			$query = "UPDATE proses_magang SET accepted = 2 WHERE nim = '$id'";
			if($this->conn->query($query) == true){

				$query2 = "UPDATE instansi SET pemagang_terdaftar - 1 WHERE username = '$username'";
				$this->conn->query($query2);
			}else{
				return false;
			}

		}

		function instansiCari($data)
		{	
			$query 	= "SELECT * FROM instansi WHERE username LIKE '%$data%' OR nama_instansi LIKE '%$data%'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}

		}
			

	}

	$instansi = new Instansi();

 ?>