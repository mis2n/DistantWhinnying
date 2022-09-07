<html>
<head><title>Horse Data Entry</title></head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');
?>

<body style="background-color:#FEF5AC;">
<br>
<h1>Enter new horse information</h1>
<br>

<form action="horse_submit.php" method="get">
	horse name: <input name="hname" type="text">
	<br><br>
	<label for="customerid">Customer</label>
	<select id="customerid" name="ownerid">

<?php
$select = 'SELECT id, fname, lname FROM customers';
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
print_r($rows);
foreach($rows as $row){
	echo "<option value=\"" . $row['id'] . "\">";
	echo $row['fname'] . " " . $row['lname'];
	echo "</option>";
}
?>
	</select>
	<br><br>


	<label for="pastureid">Pastures</label>
	<select id="pastureid" name="pastureid">
<?php
$select = 'SELECT id, name from pastures';
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
foreach($rows as $row){
	echo "<option value=\"" . $row['id'] . "\">";
	echo $row['name'];
	echo "</option>";
}
?>
	</select>


	<br><br>
	stall: <input name="stall" type="int">
	<input type="submit">
</form>

<br><br>
<div><p><button type="button" onclick="location.href='index.php'">Main Menu</button><p></div>