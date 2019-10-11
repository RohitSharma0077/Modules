<!DOCTYPE html>
<?php

  if(isset($_POST['submit']))
        {
        	extract($_POST);
             
$conn=mysqli_connect("localhost","root","","classdb");

$sql="insert into signup values('$fname','$lname')";
if(mysqli_query($conn,$sql))
{
	echo "inserted ";

}
else
{
	echo "not insert";
}
                        
}
?>



<html>
<head>
	<title>signup</title>
</head>
<body>
<form action="signup.php" method="POST">       <!--      action=<?php echo $_SERVER['PHP_SELF'];?> -->
FirstName:<input type="text" name="fname"><br>
LastName:<input type="text" name="lname"><br>
<input type="submit" name="submit" value="submit">
</form>
<pre>&lt;html&gt; 

</pre>

</body>
</html>