<?php

$servername = "localhost";
$username = "root";
$password = "whinny";
$dbname = "wgra";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<br>";
echo "Server Connection Established";


//CREATE  NEW SCHEMA (database)
echo "<br>";
$query = "CREATE SCHEMA " . $dbname;
$results = $conn->query($query);

if ($results == 1){
	echo "Database Created";
}else{echo "Database Creation Failed";}

$conn->close();

//CREATE TABLES
echo "<br>";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// CUSTOMER TABLE
echo "<br>";	
$query = "CREATE TABLE customers (id int NOT NULL AUTO_INCREMENT, fname varchar(255), lname varchar(255), phone varchar(45), email varchar(45), PRIMARY KEY (id))";
$results = $conn->query($query);

if ($results == 1){
	echo "Customers Table Created";
}else{echo "Customers Table Creation Failed";}

// HORSES TABLE
echo "<br>";
$query = "CREATE TABLE horses (id int, name varchar(255), owner varchar(255), pasture varchar(255), stall int, PRIMARY KEY (id))";
$results = $conn->query($query);

if ($results == 1){
	echo "Horses Table Created";
}else{echo "Horses Table Creation Failed";}

// RIDERS TABLE
echo "<br>";
$query = "CREATE TABLE riders (id int, name varchar(255), customer varchar(255), release_form varchar(45), PRIMARY KEY (id))";
$results = $conn->query($query);

if ($results == 1){
	echo "Riders Table Created";
}else{echo "Riders Table Creation Failed";}

// PASTURES TABLE
echo "<br>";	
$query = "CREATE TABLE pastures (id int, name varchar(255), acres int, count int, conditions varchar(45), PRIMARY KEY (id))";
$results = $conn->query($query);

if ($results == 1){
	echo "Pastures Table Created";
}else{echo "Pastures Table Creation Failed";}

$conn->close();
echo "<br>";
echo "<br>";
echo "Connection Closed";

?>