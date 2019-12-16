<!DOCTYPE html>
<html>
<head>
	<title>STUDENT_MANAGEMENT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<h1 class="text-center">ENTRY FORM</h1>
<div class="form-check mt-4" align="center">	
	<form action="redirect.php" method="post">
	
	<h4>First name: </h4><br>
		<input class="form-control col-md-4 text-center" type="text" name="first_name" required><br>
	<h4>Last name: </h4><br>
		<input class="form-control col-md-4 text-center" type="text" name="last_name" required><br>
<div class="form-group">
	<h4>Class: </h4><br>
		<select class="form-control form-control-sm col-md-4 text-center" name="class" required>
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
</div>
<div class="form-group">
	<h4>Stream: </h4><br>
		<select class="form-control form-control-sm col-md-4 text-center" name="stream" required>
			<option value="NULL">-</option>
			<option value="SCIENCE">SCIENCE</option>
			<option value="COMMERCE">COMMERCE</option>
			<option value="ARTS">ARTS</option>
			<option value="HUMANITIES">HUMANITIES</option>
		</select>
</div>
	<br>
	<button class="btn btn-warning col-md-4" type="submit">SUBMIT</button>
	</form>
</div>
</body>
</html>

