<html>
<head><title>Pasture Data Modification</title></head>
<body style="background-color:red;">

<div style=background-color:#5F6F94;">
<br>
<h1>Pasture Data Modification</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["pastureid"];


$select = "SELECT name, acres, count, conditions FROM " . $dbname . ".pastures WHERE id='" . $cid . "';";
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);

?>
<br>

<form action="pastureupdate.php" method="get">
	<input type="hidden" name="cid" value='<?php echo "$cid";?>'>
	Name: <input name="pname" type="text" value="<?php echo $rows[0]["name"]; ?>">
	<br><br>
	Acres: <input name="acres" type="text" value="<?php echo $rows[0]["acres"]; ?>">
	<br><br>
	Count: <input name="count" type="text" value="<?php echo $rows[0]["count"]; ?>">
	<br><br>
	Conditions: <input name="conditions" type="text" value="<?php echo $rows[0]["conditions"]; ?>">
	<br><br>
	<input type="submit">
</form>
<br><br>
<p>
	<button type="button" onclick="location.href='index.php'">Main Menu</button>
</p>
<br>
</div>


</body>
</html>
