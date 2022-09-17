<html>
<head><title>Customer Data Modification</title></head>
<body style="background-color:red;">

<div style=background-color:#5F6F94;">
<br>
<h1>Customer Data Modification</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["custid"];


$select = "SELECT fname, lname, phone, email FROM " . $dbname . ".customers WHERE id='" . $cid . "';";
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);

?>
<br>

<form action="customerupdate.php" method="get">
	<input type="hidden" name="cid" value='<?php echo "$cid";?>'>
	First Name: <input name="fname" type="text" value="<?php echo $rows[0]["fname"]; ?>">
	Last Name: <input name="lname" type="text" value="<?php echo $rows[0]["lname"]; ?>">
	<br><br>
	Email Address: <input name="email" type="text" value="<?php echo $rows[0]["email"]; ?>">
	Phone: <input name="phone" type="text" value="<?php echo $rows[0]["phone"]; ?>">
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
