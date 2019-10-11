<!DOCTYPE html>
<html>
<head>
	<title>datbase</title>
</head>
<body>
<?php
$servername="127.0.0.1";         //  or write  localhost
$username="root";
$pass="";
$conn=mysqli_connect($servername,$username,$pass);
if(!$conn)
{
	echo "connection failed<br>";
}

else{
	echo "connect successfully";
}
$sql="create database classdb";
if(mysqli_query($conn, $sql))
{
	echo "<br>database created";
}
else
{
	echo "error".mysqli_error($conn);
}


?>

</body>
</html>