<!DOCTYPE html>
<body>
<form action="40percent.azurewebsites.net" method="post">
    <input type="text" name="num" size="5">
    <input type = "submit" name="submit" value="Calculate!">
</form>

<?php


	$num = $_POST['num'];
	
	print "<br>40% of $num is " . number_format($num * .4, 2);
?>
</body>
</html>