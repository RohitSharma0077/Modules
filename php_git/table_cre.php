<?php
$servername="127.0.0.1";
$username="root";
$pass="";

$conn=mysqli_connect($servername,$username,$pass,"classdb");
$sql="create table tb2 (id int(9),fname varchar(20))";
if(mysqli_query($conn,$sql))
{
	echo "table created ";

}
else
{
	echo "error in creating";
}

// $sql1="update tb1 set value='mohit' where id='1160'";
// mysqli_query($conn,$sql1);


?>