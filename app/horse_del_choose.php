<html>
<head><title>Delete Horse Data</title></head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');
?>

<body style="background-color:#FEF5AC;">
<br>
<h1>Delete Horse Data</h1>
<br>

<form action="horse_del_submit.php" method="get">
	<label for="horseid">Horse</label>
	<select id="horseid" name="horseid">

<?php
$select = 'SELECT id, name FROM horses';
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