<html>
<head><title>Rider Data Entry</title></head>

<body style="background-color:#FEF5AC;">
<br>
<h1>Enter rider information, then click "Submit".</h1>
<br>
<form action="riders_submit.php" method="get">
	rider's first name: <input name="rfname" type="text">
	<br><br>
	rider's last name: <input name="rlname" type="text">
	<br><br>
	customer's ID #: <input name="custid" type="int">
	<br><br>
	Release Form Link: <input name="relform" type="text">
	<br><br>
	<input type="submit">
</form>

<div>
	<p>
		<button type="button" onclick="location.href='index.php'">Main Menu</button>
	</p>
</div>

</body>
</html>
