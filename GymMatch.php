<!DOCTYPE html>

<html>
<head>
	<title>LinkUp</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico"/>
	<link rel="stylesheet" href="assets/css/match-style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
</head>
<body>
	<img src='https://chambermaster.blob.core.windows.net/userfiles/UserFiles/chambers/847/CMS/Fireworks_Photo_Gallery/DSC_5220.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
	<div class = "logo">
		<h1><a href="home.html">LinkUp</a></h1>
	</div>
	<div id = "container">
	<div id = "main">
		<div id = "title-bar">YOUR MATCH</div>
		<div id = "details">
		<div id = "name">
			<div id = "name-php" style='z-index: -1'><?php
		$conn = new mysqli('localhost', 'root', 'POTATO123');
		mysqli_select_db($conn,"sample_db");
		$sql = "SELECT * FROM gym_table WHERE fmatch=True";
		$result = mysqli_query($conn, $sql);

		if ($conn->connect_error) {
			die("Connection error: " . $conn->connect_error);
		}

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["fname"]."&emsp;"."|". "&emsp;";
			}
		} else {
			echo "Loading...<br>";
		} ?></div></div>
		<div id = "phone">
				<div id = "phone-php" style="z-index: -1"><?php
			$conn = new mysqli('localhost', 'root', 'POTATO123');
			mysqli_select_db($conn,"sample_db");
			$sql = "SELECT * FROM gym_table WHERE fmatch=True";
			$result = mysqli_query($conn, $sql);

			if ($conn->connect_error) {
			  die("Connection error: " . $conn->connect_error);
			}

			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo $row["fphonenumber"]."&emsp;"."|". "&emsp;";
			  }
			} else {
			  echo "Loading...<br>";
			} ?></div></div>
		<div id = "info">
			<div id = "info-php" style="z-index: -1"><?php
			$conn = new mysqli('localhost', 'root', 'POTATO123');
			mysqli_select_db($conn,"sample_db");
			$sql = "SELECT * FROM gym_table WHERE fmatch=True";
			$result = mysqli_query($conn, $sql);

			if ($conn->connect_error) {
			  die("Connection error: " . $conn->connect_error);
			}

			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo $row["fblurb"]."&emsp;"."|". "&emsp;";
			  }
			} else {
			  echo "Loading...<br>";
			} ?> </div></div>
		</div>
			<div id = "footer">
				<div id = "footer-php" style="z-index: -1"> Meet at <?php
			$conn = new mysqli('localhost', 'root', 'POTATO123');
			mysqli_select_db($conn,"sample_db");
			$sql = "SELECT * FROM gym_table WHERE fmatch=True LIMIT 1";
			$result = mysqli_query($conn, $sql);

			if ($conn->connect_error) {
			  die("Connection error: " . $conn->connect_error);
			}

			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo $row["flocation"];
			  }
			} else {
			  echo "Loading...<br>";
			} ?> around <?php
				$conn = new mysqli('localhost', 'root', 'POTATO123');
				mysqli_select_db($conn,"sample_db");
				$sql = "SELECT * FROM gym_table WHERE fmatch=True LIMIT 1";
				$result = mysqli_query($conn, $sql);

				if ($conn->connect_error) {
				  die("Connection error: " . $conn->connect_error);
				}

				if (mysqli_num_rows($result) > 0) {
				  while($row = mysqli_fetch_assoc($result)) {
				    echo $row["ftime"];
				  }
				} else {
				  echo "Loading...<br>";
				} ?></div></div>
	</div>
</div>

</body>
</html>
