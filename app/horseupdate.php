<html>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$hid = $_GET["horseid"];

$hn = $_GET["hname"];
$cfn = $_GET["cfn"];
$cln = $_GET["cln"];
$pn = $_GET["past"];
$st = $_GET["stall"];

$cidfind = "Select id FROM " . $dbname . ".customers WHERE fname='" . $cfn . "' AND lname='" . $cln . "';";

$pidfind = "Select id FROM " . $dbname . ".pastures WHERE name='" . $pn . "';";


$res1 = $db->query($cidfind)->fetchALL(PDO::FETCH_ASSOC);
$cuid = $res1[0]["id"];

$res2 = $db->query($pidfind)->fetchALL(PDO::FETCH_ASSOC);
$pid = $res2[0]["id"];

$updater = "UPDATE " . $dbname . ".horses SET name='" . $hn . "', ownerid='" . $cuid . "', pastureid='" . $pid . "', stall='" . $st . "' WHERE id='" . $hid . "';";
echo "<br>";
echo $updater;
$res3 = $db->query($updater);
echo "<br><br>";
echo "UPDATED";
header("Location: horse_mod_entry.php");
?>

</body>
</html>