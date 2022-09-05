<html>
<head><title>Adding Data to Database</title></head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

$rfn = $_GET["rfname"];
$rln = $_GET["rlname"];
$cid = $_GET["custid"];
$rf = $_GET["relform"];

$query = "INSERT INTO " . $dbname . ".riders (rfname, rlname, customerid, relform) VALUES ('" . $rfn . "', '" . $rln . "', '" . $cid . "', '" . $rf . "');";
echo "<br>";
echo $query;
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "INSERT failed: " . $e->getMessage();
	exit();
}
echo "<br>";
echo "Connection Closed";

header("Location: riders_input.php");
exit();
?>
</body>
</html>
