<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>

<?php
session_start();
?>
<?php
$_SESSION['name']="admin";
$_SESSION['pass']="123";
echo "username: ".$_SESSION['name'];
echo "<br>";
echo "password: ".$_SESSION['pass'];
session_unset();
session_destroy();
?>

</body>
</html>