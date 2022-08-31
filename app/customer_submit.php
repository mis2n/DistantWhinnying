<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

	$fn = $_GET["fname"];
	$ln = $_GET["lname"];
	$ph = $_GET["phone"];
	$em = $_GET["email"];;
	echo $fn . " " . $ln;
	echo "<br>";
	echo $ph;
	echo "<br>";
	echo $em;


	$query = "INSERT INTO " . $dbname . ".customers (fname, lname, phone, email) VALUES ('" . $fn . "', '" . $ln . "', '" . $ph . "', '" . $em . "');";
	echo "<br>";
	echo $query;
	try{
		$results = $db->query($query);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	echo "<br>";
	header("Location: customer_input.php");
?>
</body>
</html>
