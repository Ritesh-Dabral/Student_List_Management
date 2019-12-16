<!DOCTYPE html>
<html>
<head>
	<title>STUDENT_MANAGEMENT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<h1 class="text-center">STUDENT_MANAGEMENT</h1>
	
	<div align="center" class="mt-3"><a href="other/header.php"><button class="btn btn-success col-md-4 text-center">ADD</button></a></div><br>
<div class="form-check mt-4" align="center">
	<h1>DATA MANIPULATION</h1>
	<form action="other/show.php" method="post" id="myForm">
	<div class="form-group">
		<h4>Based on class: </h4>
		<select class="form-control form-control-sm col-md-4 text-center" name="class" required>
			<option value="ALL">ALL</option>
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
		<br>
		<h4>Based on stream: </h4>
		<select class="form-control form-control-sm col-md-4 text-center" name="stream" required>
			<option value="ALL">ALL</option>
			<option value="SCIENCE">SCIENCE</option>
			<option value="COMMERCE">COMMERCE</option>
			<option value="ARTS">ARTS</option>
			<option value="HUMANITIES">HUMANITIES</option>
		</select>
		<br>
		<h4>Based on First name: </h4>
			<input class="form-control col-md-4 text-center" type="text" name="first_name" value="none"><br>
		<h4>Based on Last name: </h4>
			<input class="form-control col-md-4 text-center" type="text" name="last_name" value="none"><br>
			
		<br><button class="btn btn-primary col-md-2" id="show" type="submit">SHOW</button><button class="btn btn-danger col-md-2 ml-4" id="del" type="submit">DELETE</button>
	</form>
<div>
	<script>
	var actn = document.getElementById("myForm");
	var del_btn= document.getElementById("del");	
	del_btn.onclick = function()
	{
		alert('QUERY RUNNING');
		actn.action="other/delete.php";
	}
	
	</script>
</body>
</html>