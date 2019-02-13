<!--  1.000.000 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Please insert your name:</h2>
	<form name="formIme" action="vj04.php" method="post">
		<input type="input" name="ime">
		<input type="Submit" value="Submit Name">
	</form>

	<?php 
		if(isset($_POST["ime"]))
		{	
			echo "Greetings ";
			echo $_POST["ime"];
		}

	?>

</body>
</html>