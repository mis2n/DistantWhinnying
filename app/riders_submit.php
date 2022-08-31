<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "Convolution*3425";
	$dbname = "wgra";

	$rfn = $_POST["rfname"];
	$rln = $_POST["rlname"];
	$cfn = $_POST["cfname"];
	$cln = $_POST["clname"];
	$rf = $_POST["relform"];

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "<br>";
	echo "Server Connection Established";

	$query = "INSERT INTO " . $dbname . ".riders (rfname, rlname, cfname, clname, relform) VALUES ('" . $rfn . "', '" . $rln . "', '" . $cfn . "', '" . $cln . "', '" . $rf . "');";
	echo "<br>";
	//echo $query;
	$results = $conn->query($query);

	$conn->close();
	echo "<br>";
	echo "Connection Closed";

	header("Location: riders_input.php");
	exit();
?>
</body>
</html>
