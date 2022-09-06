<html>
<head><title>Rider Data Entry</title></head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');
?>

<body style="background-color:#FEF5AC;">
<br>
<h1>Enter new rider information</h1>
<br>

<form action="riders_submit.php" method="get">
	rider's first name: <input name="rfname" type="text">
	<br><br>
	rider's last name: <input name="rlname" type="text">
	<br><br>
	Release Form Link: <input name="relform" type="text">
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

<input type="submit">
</form>

</div>
	<p>
		<br><br>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
