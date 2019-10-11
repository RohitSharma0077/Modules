<?php
session_start();
if(!isset($_SESSION['user']))
{
	//header('location:sessiondest.php');
	echo "session not yet started";
}
else
{
	echo "welcome !<br>";
	echo "Session value is  ".$_SESSION['user']."<br>";
	echo "<a href='ses_destroy.php'>destroy session</a>";

}
?>

