<html>
<head><title>Remove Pasture From Database</title></head>
<body style="background-color:#FEF5AC;">
<div style="text-align: center; background-color:#5F6F94;">
<p>
<h1>Please review the pasture you have selected.</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$pastureid = $_GET["pastureid"];

$query = "SELECT id, name, acres, count, conditions  FROM " . $dbname . ".pastures WHERE id='" . $pastureid . "';";

$rows = $db->query($query)->fetchALL(PDO::FETCH_ASSOC);

foreach($rows as $row){
	echo "<option value=\"" . $pastureid . "\">";
	echo "Pasture ID Number: " . $row['id'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $pastureid . "\">";
	echo "Pasture Name: " . $row['name'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $pastureid . "\">";
	echo "Acres: " . $row['acres'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $pastureid . "\">";
	echo "Count: " . $row['count'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $pastureid . "\">";
	echo "Conditions: " . $row['conditions'];
	echo "</option>";
}

?>

<form action="pasturedel.php" method="get">
<input type="hidden" name="cid" value='<?php echo "$pastureid";?>'>
<input type="submit">
</form>

<br>
</p>
</div>

</body>
</html>
