<!DOCTYPE html>
<form action="40percent.azurewebsites.net" method="post">
    <input type="text" name="num" size="5">
</form>

</html>

<?php


	$num = $_POST['num'];
	
	print "40% of $num is" . number_format($num * .4, 2);
?>