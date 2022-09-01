<?php
ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Try to connect to the farm database
try{
	$db = new PDO('mysql:dbname=farm;host=localhost', 'admin', 'CSFLx8w17ooE');
}
catch(PDOException $e){
	// If that didn't work, its probably because the farm database does exist
	// connect to mysql without specifying the database name
	$db = new PDO('mysql:host=localhost', 'admin', 'CSFLx8w17ooE');

	// Create the farm database
	$query = 'CREATE SCHEMA ' . $dbname;
	try{
	        $results = $db->query($query);
	}	
	catch(PDOException $e){
	        echo "Database Creation failed: " . $e->getMessage();
	}
	echo "Database created";
	
	// Now we can connect to the farm database
	$db = new PDO('mysql:dbname=farm;host=localhost', 'admin', 'CSFLx8w17ooE');
}

// Turn on useful exception handling for database errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbname = 'farm';
?>
