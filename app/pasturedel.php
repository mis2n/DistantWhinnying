<html>
<head><title>Pasture Data Purged</title></head>
<body style="background-color:red;">

<div style="text-align: center; background-color:#5F6F94;">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["cid"];

echo "<br>";

$query = "DELETE FROM " . $dbname . ".pastures WHERE id='" . $cid . "';";

$results = $db->query($query);


?>
<br>
<p>
<h1>Pasture Data Purged</h1>
<br>
</p>

<p>
	<button type="button" onclick="location.href='pasture_del_choose.php'">Delete Another Entry</button>
</p>

<p>
	<button type="button" onclick="location.href='index.php'">Main Menu</button>
</p>
<br>
</div>


</body>
</html>
