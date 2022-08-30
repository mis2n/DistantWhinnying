<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "whinny";
	$dbname = "wgra";

	$fn = $_POST["fname"];
	$ln = $_POST["lname"];
	$ph = $_POST["phone"];
	$em = $_POST["email"];;
	echo $fn . " " . $ln;
	echo "<br>";
	echo $ph;
	echo "<br>";
	echo $em;

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "<br>";
	echo "Server Connection Established";

	$query = "INSERT INTO " . $dbname . ".customers (fname, lname, phone, email) VALUES ('" . $fn . "', '" . $ln . "', '" . $ph . "', '" . $em . "');";
	echo "<br>";
	//echo $query;
	$results = $conn->query($query);

	$conn->close();
	echo "<br>";
	echo "Connection Closed";

	header("Location: http://localhost/phpractice/customer_input.php");
	exit();
?>
</body>
</html>