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

		function lihatDosen()
		{	
			
			$query 	= "SELECT * FROM dosen";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function dosenDetail()
		{	
			$nip 	= $_SESSION['nip'];

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

		function hapusDosen()
		{	
			$nip 	= $_SESSION['nip'];

			$query 	= "DELETE FROM dosen WHERE nip = '$nip'";
			if($this->conn->query($query) == true){

				$query2 = "DELETE FROM auth WHERE username = '$nip'";
				
				return $this->conn->query($query2);			
			}else{
				return false;
			}
		}

		function editDosen($nama, $prodi, $telp)
		{
			$nip 	= $_SESSION['nip'];
			$query 	= "UPDATE dosen SET nama='$nama', prodi='$prodi', telp ='$telp' WHERE nip='$nip'";

			return $this->conn->query($query);

		}

		function tambahDosen($nip, $nama, $prodi, $telp, $password, $role)
		{
			$query 	= "INSERT INTO dosen(nip, nama, prodi, telp) VALUES ('$nip', '$nama', '$prodi', '$telp')";

			if($this->conn->query($query) == true){

				$query2 = "INSERT INTO auth(username, password, role) VALUES ('$nip', '$password','$role')";

				return $this->conn->query($query2);
			}else{
				return false;
			}
		}

		function dosenCari($data)
		{	
			$query 	= "SELECT * FROM dosen WHERE nip LIKE '%$data%' OR nama LIKE '%$data%'";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
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

		function lihatDosenPembimbing()
		{	
			$prodi 	= $_SESSION['prodi'];
			
			$query 	= "SELECT dosen.*, auth.role FROM dosen JOIN auth WHERE auth.username = dosen.nip AND auth.role = 2 AND dosen.prodi = '$prodi'";
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

		function skPembimbingList()
		{				
			$query 	= "SELECT dosen.*, mahasiswa.nim, mahasiswa.nama AS nama_mhs FROM dosen JOIN proses_magang JOIN mahasiswa WHERE mahasiswa.nim = proses_magang.nim AND dosen.nip = mahasiswa.nip_pembimbing AND proses_magang.sk_pembimbing = 0";
			$result = $this->conn->query($query);

			$this->datas = [];
			while($row = $result->fetch_object())
			{
				$this->datas[] = $row;
			}
		}

		function dosenDetailSk()
		{	
			$nip 	= $_SESSION['nip'];

			$query 	= "SELECT dosen.*, mahasiswa.nim ,mahasiswa.nama AS nama_mhs FROM dosen JOIN mahasiswa JOIN proses_magang WHERE proses_magang.nim = mahasiswa.nim AND mahasiswa.nip_pembimbing = dosen.nip AND proses_magang.pilih_pembimbing = 1 AND proses_magang.sk_pembimbing = 0 AND dosen.nip = '$nip'";
			$result = $this->conn->query($query);

			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nim 		= $row->nim;
				$this->nama_mhs = $row->nama_mhs;
				$this->nama		= $row->nama;
				$this->prodi	= $row->prodi;
				$this->telp 	= $row->telp;
			}
		}

		function skPembimbing()
		{
			$nip = $_SESSION['nip_sk'];
			
			$query 	= "SELECT dosen.*, mahasiswa.nim FROM dosen JOIN mahasiswa JOIN proses_magang WHERE proses_magang.nim = mahasiswa.nim AND mahasiswa.nip_pembimbing = dosen.nip AND proses_magang.pilih_pembimbing = 1 AND proses_magang.sk_pembimbing = 0 AND dosen.nip = '$nip'";

			$result = $this->conn->query($query);
			
			while($row = $result->fetch_object())
			{
				$this->nip 		= $row->nip;
				$this->nim 		= $row->nim;
				$this->nama		= $row->nama;
				$this->prodi	= $row->prodi;
				$this->telp 	= $row->telp;
			}	
		}

		function kirimSkPembimbing()
		{
			$nim = $_SESSION['file'];
			
			$query = "UPDATE proses_magang SET sk_pembimbing = 1 WHERE nim = '$nim'";
			return $this->conn->query($query);
		}

		
	}

	$dosen = new Dosen();

 ?>