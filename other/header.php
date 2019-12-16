<!DOCTYPE html>
<html>
<head>
	<title>STUDENT_MANAGEMENT</title>
	<link rel="text/stylesheet" href="css/bootstrap.min">
</head>

<body>
	<h1>STUDENT_MANAGEMENT</h1>
	
	<form action="redirect.php" method="post">
	
	<h4>First name: </h4><br>
		<input type="text" name="first_name" required>
	<h4>Last name: </h4><br>
		<input type="text" name="last_name" required>
	<h4>Class: </h4><br>
		<select name="class" required>
			<option value="KG">KG</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
	<h4>Stream: </h4><br>
		<select name="stream" required>
			<option value="NULL">-</option>
			<option value="SCIENCE">SCIENCE</option>
			<option value="COMMERCE">COMMERCE</option>
			<option value="ARTS">ARTS</option>
			<option value="HUMANITIES">HUMANITIES</option>
		</select>
	<br>
	<button type="submit">SUBMIT</button>
	</form>
</body>
</html>

