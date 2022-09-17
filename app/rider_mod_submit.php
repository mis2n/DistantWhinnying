<html>
<head><title>Modify Rider Data</title></head>
<body style="background-color:#FEF5AC;">
<div style="text-align: center; background-color:#5F6F94;">
<p>
<h1>Review rider data and update as needed</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$riderid = $_GET["riderid"];

$query = "SELECT rfname, rlname, customerid, relform  FROM " . $dbname . ".riders WHERE id='" . $riderid . "';";

$rows = $db->query($query)->fetchALL(PDO::FETCH_ASSOC);

foreach($rows as $row){
	echo "<option value=\"" . $riderid . "\">";
	echo "Customer ID Number: " . $row['customerid'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $riderid . "\">";
	echo "Customer Name: " . $row['rfname'] . " " . $row['rlname'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $riderid . "\">";
	echo "Release Form Link: " . $row['relform'];
	echo "</option>";
}

?>

<form action="riderdel.php" method="get">
<input type="hidden" name="cid" value='<?php echo "$riderid";?>'>
<input type="submit">
</form>

<br>
</p>
</div>

</body>
</html>
