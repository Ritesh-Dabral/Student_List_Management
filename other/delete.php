<?php

	require_once('user.php');
	setup_conn();
	
	
	//$sql = "INSERT INTO student (first_name, last_name, class, stream)
        //VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["class"]."','".$_POST["stream"]."')";
	//show($sql);
	
	if($_POST["class"]==="ALL" && $_POST["stream"]==="ALL" && $_POST["first_name"]==="none" && $_POST["last_name"]==="none") 
	{
		$sql = "TRUNCATE TABLE student";
		delet($sql);
	}
	else if($_POST["first_name"]==="none" && $_POST["last_name"]==="none")
	{
		if($_POST["class"]!=="ALL" && $_POST["stream"]!=="ALL")
			$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND stream = ".'"'.$_POST["stream"].'"';
		else if($_POST["class"]==="ALL" && $_POST["stream"]!=="ALL")
			$sql = "DELETE FROM student WHERE stream = "."'". $_POST["stream"]."'";
		else if($_POST["class"]!=="ALL" && $_POST["stream"]==="ALL")
			$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."'";
			
		delet($sql);
	}
	else if($_POST["first_name"]!=="none" || $_POST["last_name"]!=="none")
	{
		if($_POST["first_name"]!=="none" && $_POST["last_name"]==="none")
		{
			if($_POST["class"]!=="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND stream = "."'".$_POST["stream"]."'". ' AND first_name = "'.$_POST["first_name"].'"';		
			else if($_POST["class"]==="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE stream = "."'". $_POST["stream"]."' AND first_name= "."'".$_POST["first_name"]."'";
			else if($_POST["class"]!=="ALL" && $_POST["stream"]==="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND first_name= "."'".$_POST["first_name"]."'";
			else
				$sql = "DELETE FROM student WHERE first_name = "."'". $_POST["first_name"]."'";
		}
		else if($_POST["first_name"]==="none" && $_POST["last_name"]!=="none")
		{
			if($_POST["class"]!=="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND stream = "."'".$_POST["stream"]."'". ' AND last_name = "'.$_POST["last_name"].'"';		
			else if($_POST["class"]==="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE stream = "."'". $_POST["stream"]."' AND last_name= "."'".$_POST["last_name"]."'";
			else if($_POST["class"]!=="ALL" && $_POST["stream"]==="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND last_name= "."'".$_POST["last_name"]."'";	
			else
				$sql = "DELETE FROM student WHERE last_name = "."'". $_POST["last_name"]."'";			
		}
		else if($_POST["first_name"]!=="none" && $_POST["last_name"]!=="none")
		{
			if($_POST["class"]!=="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND stream = "."'".$_POST["stream"]."'". ' AND first_name = "'.$_POST["first_name"].'"'." AND last_name="."'".$_POST["last_name"]."'";		
			else if($_POST["class"]==="ALL" && $_POST["stream"]!=="ALL")
				$sql = "DELETE FROM student WHERE stream = "."'". $_POST["stream"]."' AND first_name= "."'".$_POST["first_name"]."' AND last_name="."'".$_POST["last_name"]."'";
			else if($_POST["class"]!=="ALL" && $_POST["stream"]==="ALL")
				$sql = "DELETE FROM student WHERE class = "."'". $_POST["class"]."' AND first_name= "."'".$_POST["first_name"]."' AND last_name="."'".$_POST["last_name"]."'";
			else
				$sql = "DELETE FROM student WHERE first_name = "."'". $_POST["first_name"]."'"." AND last_name= "."'".$_POST["last_name"]."'";			
		}
		delet($sql);	
	}
	else
		die("<h4>No such record found</h4>");
	
	header("Location: ../index.php");
?>