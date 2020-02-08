<!DOCTYPE html>
<html>
<head>
	<title>Ambiente para estudo PHP</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		if (isset( $_POST["num"])){
			echo $_POST["num"];
			$num = $_POST["num"];

			if ($num < 18){
				echo " Essa pessoa é menor de idade";
			} elseif ($num >= 18 and $num < 60) {
				echo " Essa pessoa é maior de idade";
				# code...
			} else {
				echo " Essa pessoa faz parte a terceira idade";
			}
		}
	?>


<form method="POST">
	<input type="text" name="num">
	<input type="submit">
	
</form>

	

</body>
</html>