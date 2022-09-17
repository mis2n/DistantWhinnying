<html>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["cid"];
$pn = $_GET["pname"];
$ac = $_GET["acres"];
$ct = $_GET["count"];
$cd = $_GET["conditions"];

$updater = "UPDATE " . $dbname . ".pastures SET name='" . $pn . "', acres='" . $ac . "', count='" . $ct . "', conditions='" . $cd . "' WHERE id='" . $cid . "';";
echo "<br>";
echo $updater;
$res2 = $db->query($updater);
echo "<br>";
echo "UPDATED";
header("Location: pasture_mod_entry.php");
?>

</body>
</html>