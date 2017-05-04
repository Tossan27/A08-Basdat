<?php
	if (!$_POST) {echo "400 Bad Request"; die();}
	
	session_start();
	$link = null;
	connectdb();
	
	if(isset($_POST["login-login"])) {
		login($_POST["login-username"], $_POST["login-password"]);
	}
	
	if(isset($_POST["logout-button"])) {
		logout();
	}
	
	function connectdb() {
		$servername = "localhost";
		$portnum = "5432";
		$dbname = "a08";
		$username = "postgres";
		$password = "propaganda27";
		
		$link = pg_connect("host=$servername port=$portnum dbname=$dbname user=$username password=$password");
		pg_query("SET search_path to SIRIMA");
	}
	
	function login($username, $password) {
		$result = pg_query("SELECT * FROM AKUN WHERE username='$username'");
		
		$hasil = pg_fetch_row($result);
		if($hasil[0] != null && $password == $hasil[2]) {
			$_SESSION["username"] = $hasil[0];
			$_SESSION["role"] = $hasil[1];
			header("Location: home.php");
		} else {
			header("Location: index.php");
		}
		exit();
	}
	
	function logout() {
		$_SESSION["username"] = null;
		header("Location: index.php");
		exit();
	}
?>