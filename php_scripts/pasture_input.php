<html>
<head><title>Pasture Data Entry</title></head>

<body>
<br>
<h1>Enter pasture information, then click "Submit".</h1>
<br>
<form action="pasture_submit.php" method="post">
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

<div>
	<p>
		<a href="http://localhost/phpractice/index.php"><img src="main.png"></a>
	</p>
</div>

</body>
</html>