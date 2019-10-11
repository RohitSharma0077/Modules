<?php
$servername="127.0.0.1";
$username="root";
$pass="";

$conn=mysqli_connect($servername,$username,$pass,"classdb");
$sql="update tb2 set fname='mohit' 
       where id=1160";
if(mysqli_query($conn,$sql))
{
	echo "table updated ";

}
else
{
	echo "not updated";
}

$sql1="delete from tb2 where id=1161";
if(mysqli_query($conn,$sql1))
{
	echo "deleted ";

}



?>