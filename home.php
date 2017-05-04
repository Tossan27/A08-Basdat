<?php
	session_start();
	if(isset($_SESSION["username"])) {
		echo "Welcome ";
		echo $_SESSION["username"];
	} else {
		header("Location: index.php");
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
			<input type="submit" id="logout-button" name="logout-button" value="logout" />
		</form>
		<br>
		<?php
			if($_SESSION["role"] == "t") {
				echo "<a href=\"rekap.php\">Rekap Pendaftaran</a>";
				echo "<br>";
				echo "<a href=\"terima.php\">Daftar Diterima</a>";
			} else {
				echo "<a href=\"riwayat.php\">Riwayat Pendaftaran</a>";
				echo "<br>";
				echo "<a href=\"kartu.php\">Lihat Kartu Ujian</a>";
				echo "<br>";
				echo "<a href=\"hasil.php\">Lihat Hasil Seleksi</a>";
			}
		?>
	</body>
</html>