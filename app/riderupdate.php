<html>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$rid = $_GET["rid"];
$rfn = $_GET["fname"];
$rln = $_GET["lname"];
$cfn = $_GET["cfn"];
$cln = $_GET["cln"];
$rel = $_GET["rlink"];
echo "Rider: " . $rfn . " " . $rln;
echo "<br>";
echo "Customer: " . $cfn . " " . $cln;
echo "<br>";
echo "Release Form: " . $rel;
echo "<br>";
echo "Rider ID: " . $rid;
echo "<br>";
echo "-----------------------------------------------";
echo "<br>";

$cidfind = "Select id FROM " . $dbname . ".customers WHERE fname='" . $cfn . "' AND lname='" . $cln . "';";
//echo "<br>";
//echo $cidfind;

$res1 = $db->query($cidfind)->fetchALL(PDO::FETCH_ASSOC);
$cuid = $res1[0]["id"];
echo "Customer ID: " . $cuid;
echo "<br>";

$updater = "UPDATE " . $dbname . ".riders SET rfname='" . $rfn . "', rlname='" . $rln . "', customerid='" . $res1[0]["id"] . "', relform='" . $rel . "' WHERE id='" . $rid . "';";
echo "<br>";
echo $updater;
$res2 = $db->query($updater);
echo "UPDATED";
header("Location: rider_mod_entry.php");
?>

</body>
</html>