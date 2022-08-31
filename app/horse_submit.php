<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "Convolution*3425";
	$dbname = "wgra";

	$hn = $_POST["hname"];
	$fn = $_POST["ofname"];
	$ln = $_POST["olname"];
	$ps = $_POST["pasture"];
	$st = $_POST["stall"];;
	echo $hn;
	echo "<br>";
	echo $fn . " " . $ln;
	echo "<br>";
	echo $pt;
	echo "<br>";
	echo $st;

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "<br>";
	echo "Server Connection Established";

	$query = "INSERT INTO " . $dbname . ".horses (name, ownerfname, ownerlname, pasture, stall) VALUES ('" . $hn . "', '" . $fn . "', '" . $ln . "', '" . $ps . "', '" . $st . "');";
	echo "<br>";
	//echo $query;
	$results = $conn->query($query);

	$conn->close();
	echo "<br>";
	echo "Connection Closed";

	header("Location: horse_input.php");
	exit();
?>
</body>
</html>
