<!doctype html>
<html lang=en>
<head>
	<meta charset=utf-8>
</head>
<body>
	<header></header>
	<section>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = new PDO('mysql:dbname=farm;host=localhost', 'admin', 'JmO2n6JENrsa');

$query = $db->query('SHOW TABLES');
$tables = $query->fetchAll(PDO::FETCH_COLUMN);
foreach($tables as $table){
	echo "<h2>" . $table . "</h2>";
	
	$select = 'SELECT * FROM `' . $table . '`';
	$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
	$cols = array_keys($rows[0]);	
	
	echo "<table border=1>";

	echo "<tr>";
	foreach($cols as $col)
		echo "<th>" . $col . "</th>";
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($cols as $col)
			echo "<td>" . $row[$col] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
	<a href="http://rhel2.jrf2m.com/add_customer.php?return=index.php">Add Customer</a>
	</section>
</body>
</html>
