<!doctype html>
<html lang=en>
<head>
	<meta charset=utf-8>
</head>
<body>
	<header></header>
	<section>
		<pre>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "connecting to database\n";
$db = new PDO('mysql:dbname=farm;host=localhost', 'admin', 'JmO2n6JENrsa');

echo "showing tables\n";
$query = $db->query('SHOW TABLES');
$tables = $query->fetchAll(PDO::FETCH_COLUMN);
foreach($tables as $table){
	echo "Table: ";
	print_r($table);
	echo "\n";
	$select = 'SELECT * FROM `' . $table . '`';
	$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
	foreach($rows as $row)
		print_r($row);
	echo "\n";
}
?>
		</pre>
	</section>
</body>
</html>
