<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "Convolution*3425";
	$dbname = "wgra";

	$pn = $_POST["pname"];
	$ac = $_POST["acres"];
	$ct = $_POST["count"];
	$co = $_POST["condit"];;
	

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "<br>";
	echo "Server Connection Established";

	$query = "INSERT INTO " . $dbname . ".pastures (name, acres, count, conditions) VALUES ('" . $pn . "', '" . $ac . "', '" . $ct . "', '" . $co . "');";
	echo "<br>";
	//echo $query;
	$results = $conn->query($query);

	$conn->close();
	echo "<br>";
	echo "Connection Closed";

	header("Location: http://localhost/phpractice/pasture_input.php");
	exit();
?>
</body>
</html>