<html>
<body style="background-color:red;">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

$db = new PDO('mysql:host=localhost', 'admin', $dbpw);
$query = $db->query('DROP DATABASE ' . $dbname);
?>

<div>
	<p>
		<h1>Database Destroyed</h1>
		<br><br>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
