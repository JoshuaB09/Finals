<!DOCTYPE html>
<html>
<head>
	<title>ID Registration System</title>
</head>
<body>

<div>
	<form action="Registration.php" method="post">
		<div class="container">
			<h2>Registration form</h2>
			<label for="IDN"><b>ID Number</b></label>
			<input type="text" name="ID Number" required><br>

			<label for="LName"><b>Last Name</b></label>
			<input type="text" name="Lname" required><br>

			<label for="Fname"><b>First Name</b></label>
			<input type="text" name="Fname" required><br>

			<label for="Mname"><b>Middle Name</b></label>
			<input type="text" name="Mname" required><br>

  			<label for="bdaymonth"><b>Birthday:</b></label>
 			<input type="month" id="bdaymonth" name="bdaymonth"><br>

 			<h3> Parent Names</h3><br>

			<label for="Nfather"><b>Name of Father</b></label>
			<input type="text" name="Nfather" required><br>

			<label for="Nmother"><b>Name of Mother</b></label>
			<input type="text" name="Nmother" required><br>
			<input type="submit" name="Submit" value="Submit">
		</div>	
		</form>




</div>

</body>
</html>
