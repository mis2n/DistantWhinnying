<html>
<head><title>Pasture Data Entry</title></head>

<body style="background-color:#FEF5AC;">
<br>
<h1>Enter new pasture information</h1>
<br>
<form action="pasture_submit.php" method="get">
	pasture name: <input name="pname" type="text">
	<br><br>
	acres: <input name="acres" type="int">
	<br><br>
	count: <input name="count" type="int">
	<br><br>
	conditions: <input name="condit" type="text">
	<br><br>
	<input type="submit">
</form>

<br><br>

<div>
	<p>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
