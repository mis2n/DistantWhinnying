<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$pn = $_GET["pname"];
$ac = $_GET["acres"];
$ct = $_GET["count"];
$co = $_GET["condit"];
	
$query = "INSERT INTO " . $dbname . ".pastures (name, acres, count, conditions) VALUES ('" . $pn . "', '" . $ac . "', '" . $ct . "', '" . $co . "');";
echo "<br>";
//echo $query;
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "INSERT failed: " . $e->getMessage();
}

echo "<br>";
echo "Connection Closed";

header("Location: pasture_input.php");
exit();
?>
</body>
</html>
