<?php
session_start();
if (isset($_SESSION['user'])) {

	echo "welconme";
}
else
	header("location:login.php");



echo date('Y-m-d');
echo"<br>";
echo date('Y.m.d');
echo"<br>";
echo date('l');
echo"<br>";
echo date('h:i:s a');
echo "<br>";

//mk time
$a=mktime(12,30,31,3,23,1996);
echo date('Y-m-d .h:i:s',$a);

// str to time
echo "<br>";
$a1=strtotime('10:30pm June 13 2019');
echo date('Y-m-d ...h:i:s',$a1);

echo "<br><br><br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html>