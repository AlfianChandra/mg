<?php 
	session_start();

	class Database
	{
		private $host;
		private $user;
		private $pass;
		private $db;
		public  $conn;

		function __construct()
		{
		    $this->host = 'localhost';
		    $this->user = 'root';
		    $this->pass = '';
		    $this->db 	= 'magang';

		    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
		
		}
	}

 ?>