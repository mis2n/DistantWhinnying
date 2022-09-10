<<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('config.inc');

function stall($id) {
	global $db;
	
	try{
		echo "<table width=\"100%\" height=\"100%\" style=\"background-color: white;\"><tr><td>";
		$select = 'SELECT name, ownerid, stall FROM horses';
		$rows = $db->query($select)->fetchALL(PDO::FETCH_ASSOC);
		foreach($rows as $row){
			if($row["stall"] == $id){
				echo "<p>Name: " . $row["name"] . "</p>";
				echo "<p>Ownerid: " . $row["ownerid"] . "</p>";
			}	
		}
		echo "</td></tr></table>";
	}
	catch(PDOException $e){

		echo "EMPTY";
	}
}
?>
!doctype html>
<html lang=en>
<head>
	<meta charset=utf-8>
</head>
<body style="background-color:#FEF5AC;">
	<header></header>
	<section>
		<table style="background-image: url('img/barn.jpg');" border=1 width="1539px" height="956px">
			<tr height="120"><td width="30"></td><td width="560"></td><td width="300"></td><td width="560"></td><td></td></tr>
			<tr height="250"><td></td><td></td><td><table border=1 width="100%" height="100%">
			<tr height="33%"><td width="33%"><?php stall(21); ?></td><td width="33%"></td><td><?php stall(24); ?></td></tr>
			<tr height="33%"><td><?php stall(22); ?></td><td></td><td><?php stall(25); ?></td></tr>
			<tr height="33%"><td><?php stall(23); ?></td><td></td><td><?php stall(27); ?></td></tr>
				</table></td><td></td><td></td></tr>
			<tr height="300"><td></td><td><table border=1 width="100%" height="100%">
			<tr height="33%"><td width="20%"><?php stall(11); ?></td><td width="20%"><?php stall(12); ?></td><td width="20%"><?php stall(13); ?></td><td width=20%"><?php stall(14); ?></td><td><?php stall(15); ?></td></tr>
				<tr height="33%"><td></td><td></td><td></td><td></td><td></td></tr>
				<tr><td><?php stall(16); ?></td><td><?php stall(17); ?></td><td><?php stall(18); ?></td><td><?php stall(19); ?></td><td><?php stall(20); ?></td></tr>
				</table></td><td></td><td><table border=1 width="100%" height="100%">
				<tr height="33%"><td width="20%"><?php stall(6); ?></td><td width="20%"><?php stall(7); ?></td><td width="20%"><?php stall(8); ?></td><td width="20%"><?php stall(9); ?></td><td><?php stall(10); ?></td></tr>
				<tr height="33%"><td></td><td></td><td></td><td></td><td></td></tr>
				<tr height="33%"><td><?php stall(1); ?></td><td><?php stall(2); ?></td><td><?php stall(3); ?></td><td><?php stall(4); ?></td><td><?php stall(5); ?></td></tr>
				</table></td><td></td></tr>
			<tr><td></td><td></td><td></td><td></td><td></td></tr>
		</table>
	</section>

	<section>
<h1>Database Tables</h1>
	<br>
	</section>

<div>
	<p>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
