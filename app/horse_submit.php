<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$name = $_GET["name"];
$ownerid = $_GET["ownerid"];
$pastureid = $_GET["pastureid"];
$stall = $_GET["stall"];;
echo $name;
echo "<br>";
echo $ownerid;
echo "<br>";
echo $pastureid;
echo "<br>";
echo $stall;

$query = "INSERT INTO " . $dbname . ".horses (name, ownerid, pastureid, stall) VALUES ('" . $name . "', '" . $ownerid . "', '" . $pastureid . "', '" . $stall . "');";
echo "<br>";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "INSERT failed: " . $e->getMessage();
	exit();
}
echo "<br>";
echo "Connection Closed";

header("Location: horse_input.php");
exit();
?>
</body>
</html>
