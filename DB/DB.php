<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'student_management';
	
	$conn = new mysqli($host,$user,$pass,$db);
	
	if($conn->connect_error) //connecting to mysqlite
		die('<h1>Could not connect with Database</h1>'.$conn->connect_error);		

?>