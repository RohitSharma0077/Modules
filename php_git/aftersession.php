<?php
session_start();
if (!isset($_SESSION['user'])) {
	
header("location:login.php");
echo "<br>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>...</title>
</head>
<body>
<a href="datetime.php">click</a>
<br>
</body>
</html>