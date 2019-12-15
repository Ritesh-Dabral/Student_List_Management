<?php 

	class Database{
		
		private $host = 'localhost';
		private $user = 'root';
		private $pass = 'aasdnasd';
		private $db = 'student_management';
		public $conn;
		
		public	function dbConnection(){
			$conn = new mysqli($host,$user,$pass,$db);
			if($conn->connect_error) //connecting to mysqlite
				die('<h1>Could not connect with Database</h1>'.$conn->connect_error);		
		}
			
	}	

?>