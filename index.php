<?php
	session_start();
	if(isset($_SESSION["username"])) {
		header("Location: home.php");
		exit();
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>A-08 Basdat SIRIMA</title>
		<script type="text/javascript" src="src/js/jquery-3.1.1.min.js"></script>
	</head>
	
	<body>
		<form action="./functions.php" method="post">
			<table>
				<th>
					<td colspan="2">LOGIN SIRIMA</td>
				</th>
				<tr>
					<td>Username : </td>
					<td><input type="text" id="login-username" name="login-username" /></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="password" id="login-password" name="login-password" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" id="login-login" name="login-login" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>