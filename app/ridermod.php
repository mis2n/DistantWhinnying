<html>
<head><title>Rider Data Modification</title></head>
<body style="background-color:red;">

<div style=background-color:#5F6F94;">
<br>
<h1>Rider Data Modification</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["riderid"];


$select = "SELECT rfname, rlname, customerid, relform FROM " . $dbname . ".riders WHERE id='" . $cid . "';";
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);

$select2 = "SELECT fname, lname FROM " . $dbname . ".customers WHERE id='" . $rows[0]["customerid"] . "';";
$cname = $db->query($select2)->fetchALL(PDO::FETCH_ASSOC);

?>
<br>

<form action="riderupdate.php" method="get">
	<input type="hidden" name="rid" value='<?php echo "$cid";?>'>
	Rider Name: <input name="fname" type="text" value="<?php echo $rows[0]["rfname"]; ?>">
	<input name="lname" type="text" value="<?php echo $rows[0]["rlname"]; ?>">
	<br><br>
	Customer Name: <input name="cfn" type="text" value="<?php echo $cname[0]["fname"]; ?>">
	<input name="cln" type="text" value="<?php echo $cname[0]["lname"]; ?>">
	<br><br>
	Release Form: <input name="rlink" type="text" value="<?php echo $rows[0]["relform"]; ?>">
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
