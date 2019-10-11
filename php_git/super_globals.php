<!DOCTYPE html>
<html>
<head>
	<title>super globals</title>
</head>
<body>
<?php
$a=10;
$b=20;
function sum()
{
	//$c=$a+$b;  //not access
	$GLOBALS["c"]=$GLOBALS["a"]+$GLOBALS["b"];
}
sum();
echo "$c";


?>
</body>
</html>