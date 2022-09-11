<html>
<head><title>Remove Horse From Database</title></head>
<body style="background-color:#FEF5AC;">
<div style="text-align: center; background-color:#5F6F94;">
<p>
<h1>Please review the horse you have selected.</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$horseid = $_GET["horseid"];

$query = "SELECT name, ownerid, pastureid, stall FROM " . $dbname . ".horses WHERE id='" . $horseid . "';";

$rows = $db->query($query)->fetchALL(PDO::FETCH_ASSOC);

foreach($rows as $row){
	echo "<option value=\"" . $horseid . "\">";
	echo "Horse ID Number: " . $horseid;
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $horseid . "\">";
	echo "Horse Name: " . $row['name'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $horseid . "\">";
	echo "Owner ID: " . $row['ownerid'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $horseid . "\">";
	echo "Pasture ID: " . $row['pastureid'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $horseid . "\">";
	echo "Stall: " . $row['stall'];
	echo "</option>";
}

?>

<form action="horsedel.php" method="get">
<input type="hidden" name="cid" value='<?php echo "$horseid";?>'>
<input type="submit">
</form>

<br>
</p>
</div>

</body>
</html>
