<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="csrf-token">
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form method="POST">
		@csrf
		<label for="first">First Name:</label> <br><br>
		<input type="text" id="first" name="awal"> <br><br>

		<label for="last">Last Name:</label> <br><br>
		<input type="text" id="last" name="akhir"> <br><br>

		<label>Gender:</label> <br><br>
		<input type="radio" name="Gender">Male<br>
		<input type="radio" name="Gender">Female<br>
		<input type="radio" name="Gender">Other<br><br>

		<label>Nationality:</label><br><br>
		<select>
			<option>Indonesia</option>
			<option>Netherland</option>
			<option>Italy</option>
			<option>Japan</option>
		</select><br><br>

		<label>Languange Spoken:</label><br><br>
		<input type="checkbox" name="languange">Bahasa Indonesia<br>
		<input type="checkbox" name="languange">English<br>
		<input type="checkbox" name="languange">Other<br><br>

		<label>Bio:</label><br><br>
		<textarea cols="50" rows="20"></textarea><br>

		<input type="submit" value="Sign Up" >
	</form>

</body>
</html>