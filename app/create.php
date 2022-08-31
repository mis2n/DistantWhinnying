<html>
<body>

<title>Creating WGRA Database Schema</title>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

//CREATE  NEW SCHEMA (database)
echo "<br>";
$query = 'CREATE SCHEMA ' . $dbname;
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Database Creation failed: " . $e->getMessage();
}
echo "Database created";



//CREATE TABLES
echo "<br>";

// CUSTOMER TABLE
echo "<br>";	
$query = "CREATE TABLE customers (id int NOT NULL AUTO_INCREMENT, fname varchar(255), lname varchar(255), phone varchar(45), email varchar(45), PRIMARY KEY (id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Customers Table Creation Failed: ". $e->getMessage();
}

// HORSES TABLE
echo "<br>";
$query = "CREATE TABLE horses (id int NOT NULL AUTO_INCREMENT, name varchar(255), ownerfname varchar(255), ownerlname varchar(255), pasture varchar(255), stall int, PRIMARY KEY (id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Horses Table Creation Failed: " . $e->getMessage();
}

// RIDERS TABLE
echo "</br>";
$query = "CREATE TABLE riders (id int NOT NULL AUTO_INCREMENT, rfname varchar(255), rlname varchar(255), cfname varchar(255), clname varchar(255), relform varchar(255), PRIMARY KEY (id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Riders Table Creation Failed: ". $e->getMessage();
}

// PASTURES TABLE
echo "<br>";	
$query = "CREATE TABLE pastures (id int NOT NULL AUTO_INCREMENT, name varchar(255), acres int, count int, conditions varchar(45), PRIMARY KEY (id))";

try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Pastures Table Creation Failed: " . $e->getMessage();
}

echo "<br>";
echo "<br>";

?>

<div>
	<p>
		<a href="index.php"><img src="img/main.png"></a>
	</p>
</div>

</body>
</html>
