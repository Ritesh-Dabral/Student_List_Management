<?php
	require_once('user.php');
	setup_conn();
	
	//$sql = "INSERT INTO student (first_name, last_name, class, stream) VALUES (".$first_name.",".$last_name.",".$class.",".$stream.");";
	$sql = "INSERT INTO student (first_name, last_name, class, stream)
        VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["class"]."','".$_POST["stream"]."')";
	insert($sql);
	header("Location: ../index.php");
?>