<?php 
	
	require_once 'Database.php';

	class Auth extends Database
	{
		
		function login($username, $password)
		{

			$query 	= $this->conn->prepare("SELECT username, role FROM auth WHERE username = ? AND password = ?");

			//ss itu string
			$query->bind_param("ss", $username, $password);
			$query->execute();
			
			// Tentukan apa saja yang mau diambil
			$query->bind_result($username, $role);
			$query->fetch();


			if(isset($role)){
				$_SESSION["username"] = $username;
				$_SESSION["role"]     = $role;

				$this->isLogin();
			} else header("Location: ../auth/");
		}

		function isLogin()
		{
			if(isset($_SESSION["role"])){

				switch ($_SESSION["role"]) 
				{
					case '0':
						header("Location: ../mhs/");
						break;
					case '1':
						header("Location: ../admin/");
						break;
					case '2':
						header("Location: ../dosen/");
						break;
					case '3' : 
						header("Location: ../instansi/");
						break;
				}
			}
		}

		function isNotLogin()
		{
			if(!isset($_SESSION["role"])) header("Location: ../auth/");
		}
	}

	$auth = new Auth();

 ?>