<html>
<head><title>Modify Horse Data</title></head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');
?>

<body style="background-color:#FEF5AC;">
<br>
<h1>Select horse to modify . . .</h1>
<br>

<form action="horsemod.php" method="get">
	<label for="horseid">Horse</label>
	<select id="horseid" name="horseid">

<?php
$select = 'SELECT id, name, ownerid, pastureid, stall FROM horses';
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
print_r($rows);
foreach($rows as $row){
	echo "<option value=\"" . $row['id'] . "\">";
	echo $row['name'];
	echo "</option>";
}
?>
	</select>
<input type=submit>
</form>

<br><br>
<div><p><button type="button" onclick="location.href='index.php'">Main Menu</button><p></div>