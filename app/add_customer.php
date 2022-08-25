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

$argc = count($_GET);

$return = $_GET["return"];
if ($argc > 1){
	$name = $_GET["name"];
	$phone = $_GET["phone"];
	$email = $_GET["email"];
	$active = 1;
	$next_id = 5;

	$insert = 'INSERT INTO `customers` (' . 
		//'`idcustomers`, ' .
		'`name`, `phone`, `email`, `active`)' .
		' VALUES (\'' .
		//$next_id . '\', \'' . 
		$name . '\', \'' .
		$phone . '\', \'' .
		$email . '\', \'' .
		$active . '\');';

	$db->query($insert);

	echo "<a href=\"" . $return . "\">Go Back</a>";

} else {
	echo "<form action=\"add_customer.php\" method=\"get\">" .
		"Name: <input type=\"text\" name=\"name\"><br>" .
		"Email: <input type=\"text\" name=\"email\"><br>" .
		"Phone: <input type=\"text\" name=\"phone\"><br>" .
		"<input type=\"hidden\" name=\"return\" value=\"" .
		$return . "\">" . "<input type=\"submit\"></form>";
}
?>
	</section>
</body>
</html>
