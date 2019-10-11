<?php
session_start();


$un=$_POST['t1'];
$ps=$_POST['t2'];

if ($_POST['t1']==$un && $_POST['t2']==$ps) {

	$_SESSION['user']=$un;
	$conn=mysqli_connect("localhost","root","","rdatabase");
	$sql="select PassCode from rtable where UserName='$un'";
	$request=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($request);
	$returnpass=$result['PassCode'];

	if ($returnpass==$ps) 

	{
		# code...
		header("location:aftersession.php");
	}

else{
echo "<script>alert('invalid input')</script>";
include 'login.php';
}
mysqli_close($conn);
}
?>






