<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<h1>Signup</h1>
<form action="signup_process.php" method="post">
		<label>Username:</label>
	<input type="text name="username" required><br>
		<label>Email:</label>
		<input type="email" name="email" required><br>
		<label>Password:</label>
		<input type="password" name="password" required><br>
		<button type="submit">Signup</button>
	</form>
</body>
</html>