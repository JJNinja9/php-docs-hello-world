
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
	<h1>40% Calculator</h1>
	
	<form action="myproject1.php" method="POST">
		<input type = "text" name = "num" size = "5">
		<input type = "submit" name="submit" value="Calculate!">
	
	</form>

<?php


	$num = $_POST['num'];
	
	print "40% of $num is" . number_format($num * .4, 2);
</body>

</html>
