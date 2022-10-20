<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

<div>
	<form action="RegistrationData.php" method="post">
		<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6">
			<h2>Registration form</h2>
			<label for="IDN"><b>ID Number</b></label><br>
			<input type="text" name="ID Number" required><br>

			<label for="LName"><b>Last Name</b></label><br>
			<input type="text" name="Lname" required><br>

			<label for="Fname"><b>First Name</b></label><br>
			<input type="text" name="Fname" required><br>

			<label for="Mname"><b>Middle Name</b></label><br>
			<input type="text" name="Mname" required><br>

  			<label for="bdaymonth"><b>Birthday:</b></label><br>
 			<input type="month" id="bdaymonth" name="bdaymonth"><br>

 			<h4> Parent Names</h4>
			<label for="Nfather"><b>Name of Father</b></label><br>
			<input type="text" name="Nfather" required><br>

			<label for="Nmother"><b>Name of Mother</b></label><br>
			<input type="text" name="Nmother" required><br>		<input type="submit" name="Submit" value="Submit"><br><br>
			<a href="Login.php" style="color: black;">Click to Login</a>
		</form>
	</div>	
	</div>
	</div>
	</div>



</div>

</body>
</html>
