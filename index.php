<?php 
	//require_once('other/header.php'); //connecting with database
	require_once('user.php'); //connecting with database
	
	setup_conn();
	//$sql = "INSERT INTO student (first_name, last_name, class, stream) VALUES ('Ritesh','Dabral','12','Science')";
	//$sql = "DELETE FROM student WHERE id=1";;
	//delet($sql);
	//insert($sql);
	$sql = "SELECT first_name,last_name,class,stream FROM student";
	show($sql);
	
?>