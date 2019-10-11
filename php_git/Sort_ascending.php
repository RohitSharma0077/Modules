<!DOCTYPE html>
<html>
<head>
	<title>Array ascenbding</title>
</head>
<body>
	<?php
	$arr=array(78,60,62,68,73,85,66,64,76,63,81,73,68,72,65,74,62,65,68,75,79,73);
	sort($arr);
	for($a=0; $a<=5; $a++) 
	{
			echo $arr[$a];
			echo "<br>";
	}
	echo "<br><br>";
	rsort($arr);
	for($a=5; $a>=0; $a++) 
	{
			echo $arr[$a];
			echo "<br>";
	}
	
	
	?>
</body>
</html>