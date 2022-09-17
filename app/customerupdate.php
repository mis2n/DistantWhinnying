<html>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config.inc');

$cid = $_GET["cid"];
$fn = $_GET["fname"];
$ln = $_GET["lname"];
$em = $_GET["email"];
$ph = $_GET["phone"];

$updater = "UPDATE " . $dbname . ".customers SET fname='" . $fn . "', lname='" . $ln . "', email='" . $em . "', phone='" . $ph . "' WHERE id='" . $cid . "';";
echo "<br>";
echo $updater;
$res2 = $db->query($updater);
echo "UPDATED";
header("Location: customer_mod_entry.php");
?>

</body>
</html>