<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'student_management';
	
	$conn; //connection variable
	
	//setup_connection
	function setup_conn()
	{
		global $host,$user,$pass,$db,$conn;
			
		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if (mysqli_connect_error())
			die("Database connection failed: " . mysqli_connect_error());
	}

	//insert
	function insert($sql)
	{
		global $conn;
		
		if ($conn->query($sql) === TRUE) 
			echo "New record created successfully";
		else
			echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//delete
	function delet($sql)
	{
		global $conn;
		
		if ($conn->query($sql) === TRUE) 
			echo "Record Deleted";
		else
			echo "Error Deleting record: ". $conn->error;
	}
	
	//update
	function update($sql)
	{
		global $conn;
		
		if ($conn->query($sql) === TRUE) 
			echo "Record Updated Successfully";
		else
			echo "Error updating record: ". $conn->error;
	}	
	
	//view
	function show($sql)
	{
		global $conn;
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Name: " . $row["first_name"]. " " .$row["last_name"]."	Class: ". $row["class"]."	Stream: ".$row["stream"]."<br>";
			}
		} 
		else
			echo "<h1>0 results</h1>";
	}
?>