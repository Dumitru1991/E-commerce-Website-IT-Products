<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$conn = mysqli_connect("localhost","root","") or die("can not connect database");
		mysqli_select_db($conn,"shop") or die ("no database");   
		mysqli_set_charset($conn,'UTF8');
		if ($conn) {
			// echo "successedful";
			# code...
		}
		else{
			echo "failed";
		}

	 ?>
	 
</body>
</html>