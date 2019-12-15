<?php 
	class User{
			private $conn;
			//Consructor
			public function __construct(){
				$conn= new mysqli('localhost','root','','student_management');
				
			if ($conn->connect_error) {
				die("Database connection failed: " . $conn->connect_error);
			}
			else
				echo "Connected successfully";
			}
		
			//SQL queries
			public function runQuery($sql){
				$result = $conn->queries($sql);
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " .$row["mid_name"]. " " . $row["last_name"] . $row["contact_no"]. $row["class"]. $row["stream"]. "<br>";
					}
				} 
				else
					echo "0 results";

			}
			
			//insert
			public function insert($sql){
				if($conn->query($sql)===TRUE)
					echo "New Record created successfully";
				else
					"Error: " . $sql . "<br>" . $conn->error;
			}
			
			//update
			public function update($sql){
				if($conn->query($sql)===TRUE)
					echo "Record updated successfully";
				else
					"Error updating record: " . $conn->error;
			}	
				
			//delete
			public function delet($sql){
				if($conn->query($sql)===TRUE)
					echo "Record deleted successfully";
				else
					"Error deleting record: " . $conn->error;
			}				
		
		
		
	}


?>