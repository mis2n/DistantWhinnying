<html>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

$db = new PDO('mysql:host=localhost', 'admin', $dbpw);
$query = $db->query('DROP DATABASE ' . $dbname);
?>
<a href="index.php">Go home</a>
</body>
</html>
