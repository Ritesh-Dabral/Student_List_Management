<!DOCTYPE html>
<html>
<head>
	<title>STUDENT_MANAGEMENT_LIST</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">STUDENT LIST</h1>
	<div align="center"><a href="../index.php"><button class="btn btn-warning col-md-4">EXIT</button></a></div><br>
			  
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
			echo "Error Deleting record: ";

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
			echo "<table class=".'"table"><thead><tr><th>First Name</th><th>Last Name</th><th>Class</th><th>Stream</th></tr></thead>';
			while($row = $result->fetch_assoc()) {
				echo "<tr class=><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['class'] . "</td><td>" . $row['stream'] . "</td></tr>"; 
			}
			echo "</table>"; //Close the table in HTML
		} 
		else
			echo "<h1>0 results</h1>";

	}
?>
</body>
</html>