<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$hn = $_GET["hname"];
$fn = $_GET["ofname"];
$ln = $_GET["olname"];
$ps = $_GET["pasture"];
$st = $_GET["stall"];;
echo $hn;
echo "<br>";
echo $fn . " " . $ln;
echo "<br>";
echo $ps;
echo "<br>";
echo $st;

$query = "INSERT INTO " . $dbname . ".horses (name, ownerfname, ownerlname, pasture, stall) VALUES ('" . $hn . "', '" . $fn . "', '" . $ln . "', '" . $ps . "', '" . $st . "');";
echo "<br>";
//echo $query;
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
