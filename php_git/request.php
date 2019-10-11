<?php
session_start();
?>
<?php
$conn=mysqli_connect("localhost","root","","rdatabase");
if (!$conn) {
	# code...
	die("connection error".mysqli_connect_error());
}
$sql="insert into rtable values(?,?,?,?,?)";
if ($stmt=mysqli_prepare($conn,$sql)) {
mysqli_stmt_bind_param($stmt,'ssssi',$un,$pass1,$pass2,$em,$mb);
    $un=$_POST['username'];
    $pass1=$_POST['pwd1'];
    $pass2=$_POST['pwd2'];
    $em=$_POST['email'];
    $mb=$_POST['mobile'];
    



mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 mysqli_close($conn);
    header("location:login.php");

}

?>