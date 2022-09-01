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

require_once('config.inc');

$query = $db->query('SHOW TABLES');
$tables = $query->fetchAll(PDO::FETCH_COLUMN);
foreach($tables as $table){
	echo "<h2>" . $table . "</h2>";
	
	$select = 'SELECT * FROM `' . $table . '`';
	$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);

	if (count($rows) !== 0){
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

	$show = 'SHOW CREATE TABLE ' . $table;
	$create = $db->query($show)->fetchAll(PDO::FETCH_ASSOC);
	print_r($create[0]['Create Table']);
	echo "<br>";
	foreach($rows as $row){
		$insert = 'INSERT INTO `' . $table . '` (';
		foreach($cols as $col)
			$insert = $insert . '`' . $col . '`, ';
		$insert = $insert . ') VALUES (';
		foreach($cols as $col)
			$insert = $insert . '\'' . $row[$col] . '\', ';
		$insert = $insert . ')';
		print_r($insert);
		echo "<br>";
	}

}
?>
	<br>
	</section>
	<a href="index.php">Go Home</a>
</body>
</html>
