<html>
<body style="background-color:red;">

<title>Creating WGRA Database Schema</title>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

$query = "CREATE TABLE customers (id int NOT NULL AUTO_INCREMENT, fname varchar(255) NOT NULL, lname varchar(255) NOT NULL, phone varchar(45) NOT NULL UNIQUE, email varchar(45) NOT NULL UNIQUE, PRIMARY KEY (id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Customers Table Creation Failed: ". $e->getMessage();
}

$query = "CREATE TABLE pastures (id int NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL UNIQUE, acres int NOT NULL, count int NOT NULL, conditions varchar(45) NOT NULL, PRIMARY KEY (id))";
try{
        $results = $db->query($query);
}
catch(PDOException $e){
        echo "Pastures Table Creation Failed: " . $e->getMessage();
}

$query = "CREATE TABLE horses (id int NOT NULL AUTO_INCREMENT, name varchar(255) NOT NULL UNIQUE, ownerid int NOT NULL, pastureid int, stall int, PRIMARY KEY (id), FOREIGN KEY (ownerid) REFERENCES customers(id), FOREIGN KEY (pastureid) REFERENCES pastures(id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Horses Table Creation Failed: " . $e->getMessage();
}

$query = "CREATE TABLE riders (id int NOT NULL AUTO_INCREMENT, rfname varchar(255) NOT NULL, rlname varchar(255) NOT NULL, customerid int NOT NULL, relform varchar(255) NOT NULL, PRIMARY KEY (id), FOREIGN KEY (customerid) REFERENCES customers(id))";
try{
	$results = $db->query($query);
}
catch(PDOException $e){
	echo "Riders Table Creation Failed: ". $e->getMessage();
}
?>

<div>
	<p>
		<h1>Database Created</h1>
		<br><br>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
