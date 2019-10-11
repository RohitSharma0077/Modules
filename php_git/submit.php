<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
</head>
<body>
<div>
 <h2><center> Login or Sign in</center> </H2>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          
          Username:<input type="text" name="un"><br>
          Password:<input type="password" name="ps"><br><br>
          <input type="submit" value="SUBMIT" name="SUBMIT">
         
</div>
<?php
if(isset($_POST['SUBMIT']))
{
<?php
$servername="127.0.0.1";
$username="root";
$pass="";
extract($_POST);
$conn=mysqli_connect($servername,$username,$pass,"classdb");
$sql="insert into  tb1 values('$un','ps')";
mysqli_query($conn,$sql);

}



?>
</body>
</html>