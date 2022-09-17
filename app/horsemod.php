<html>
<head><title>Horse Data Modification</title></head>
<body style="background-color:red;">

<div style=background-color:#5F6F94;">
<br>
<h1>Horse Data Modification</h1>
<br>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["horseid"];

$select = "SELECT name, ownerid, pastureid, stall FROM " . $dbname . ".horses WHERE id='" . $cid . "';";
$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);

$select2 = "SELECT fname, lname FROM " . $dbname . ".customers WHERE id='" . $rows[0]["ownerid"] . "';";
$cname = $db->query($select2)->fetchALL(PDO::FETCH_ASSOC);

$select3 = "SELECT id, name FROM " . $dbname . ".pastures WHERE id='" . $rows[0]["pastureid"] . "';";
$pname = $db->query($select3)->fetchALL(PDO::FETCH_ASSOC);

?>
<br>

<form action="horseupdate.php" method="get">
	<input type="hidden" name="horseid" value='<?php echo "$cid";?>'>
	<input type="hidden" name="ownid" value=$rows[0]["ownerid"];?>
	<input type="hidden" name="pastid" value=$rows[0]["pastureid"];?>

	Horse Name: <input name="hname" type="text" value="<?php echo $rows[0]["name"]; ?>">
	<br><br>
	Customer Name: <input name="cfn" type="text" value="<?php echo $cname[0]["fname"]; ?>">
	<input name="cln" type="text" value="<?php echo $cname[0]["lname"]; ?>">
	<br><br>
	Pasture: <input name="past" type="text" value="<?php echo $pname[0]["name"]; ?>">
	<br><br>
	Stall: <input name="stall" type="text" value="<?php echo $rows[0]["stall"]; ?>">

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
