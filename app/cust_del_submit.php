<html>
<head><title>Remove Customer From Database</title></head>
<body style="background-color:#FEF5AC;">
<div style="text-align: center; background-color:#5F6F94;">
<p>
<h1>Please review the customer you have selected.</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$ownerid = $_GET["ownerid"];

$query = "SELECT fname, lname, phone, email FROM " . $dbname . ".customers WHERE id='" . $ownerid . "';";

$rows = $db->query($query)->fetchALL(PDO::FETCH_ASSOC);

foreach($rows as $row){
	echo "<option value=\"" . $ownerid . "\">";
	echo "Customer ID Number: " . $ownerid;
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $ownerid . "\">";
	echo "Customer Name: " . $row['fname'] . " " . $row['lname'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $ownerid . "\">";
	echo "Phone: " . $row['phone'];
	echo "</option>";
}

foreach($rows as $row){
	echo "<option value=\"" . $ownerid . "\">";
	echo "Email Address: " . $row['email'];
	echo "</option>";
}
?>

<form action="custdel.php" method="get">
<input type="hidden" name="cid" value='<?php echo "$ownerid";?>'>
<input type="submit">
</form>

<br>
</p>
</div>

</body>
</html>
